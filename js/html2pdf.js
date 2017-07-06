// code from:
// http://www.techumber.com/how-to-convert-html-to-pdf-using-javascript-multipage/
const $agreement = $('#agreement-content')

// on create pdf button click
function createPDF() {

    let cache_width = $agreement.width(),
        cache_height = $agreement.height(),
        a4 = [595.28, 990.89], // for a4 size paper width and height
        winHeight = a4[1],
        agreementWidth = a4[0],
        agreementHeight

    $agreement.scrollTop(0)
    const imagePieces = []
    imagePieces.length = 0

    return new Promise((resolve, reject) => {
        $agreement.width(agreementWidth * 1.33333 - 40)
        agreementHeight = $agreement[0].scrollHeight
        $agreement.height(agreementHeight)
        const getCanvas = html2canvas($agreement, {
            imageTimeout: 1000,
            removeContainer: true,
            onrendered: function(canvas) {
                const canvasImage = new Image()
                canvasImage.src= canvas.toDataURL("image/png")
                canvasImage.onload = function splitAgreement(e) {
                    // split agreement into separate pages (images)
                    const totalImgs = Math.round(agreementHeight/winHeight)
                    for(let i = 0; i < totalImgs; i++) {
                        const canvas = document.createElement('canvas'),
                            ctx = canvas.getContext('2d')
                        canvas.width = agreementWidth
                        canvas.height = winHeight
                        ctx.drawImage(canvasImage,
                            0, i * winHeight, agreementWidth, winHeight,
                            0, 0, canvas.width, canvas.height
                        )

                        imagePieces.push(canvas.toDataURL("image/png"))
                    }

                    // create new PDF and add each image
                    let totalPieces = imagePieces.length - 1
                    const doc = new jsPDF({
                        unit: 'px',
                        format: 'a4'
                    })

                    imagePieces.forEach(function(img){
                        doc.addImage(img, 'JPEG', 20, 40)
                        if(totalPieces)
                            doc.addPage()
                        totalPieces--
                    })

                    doc.save('agreement.pdf')
                    // post PDF to server as datauristring
                    $agreement.width(cache_width)
                    $agreement.height(cache_height)
                    resolve(doc.output('datauristring'))
                }
            }
        })
    })
}
module.exports.createPDF = createPDF

// function createPDF() {
//     const agreementElement = document.querySelector('#agreement-content')
//     const contentHeight = agreementElement.scrollHeight
//     const viewableHeight = agreementElement.clientHeight
//
//     return new Promise((resolve, reject) => {
//         const doc = new jsPDF()
//         for(let i = 0; i < Math.ceil(contentHeight/viewableHeight); i++) {
//             agreementElement.scrollTop = i * viewableHeight
//
//             html2canvas(agreementElement, {
//                 onrendered: function(canvas) {
//                     const img = canvas.toDataURL("image/png")
//                     doc.addImage(img, 'JPEG', 20, 20)
//                     if(Math.ceil(contentHeight/viewableHeight) - 1 !== i) {
//                         doc.addPage()
//                     }
//                 }
//             })
//         }
//
//         doc.save('test.pdf')
//         resolve(doc.output('datauristring'))
//     })
// }
