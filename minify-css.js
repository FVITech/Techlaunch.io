const CleanCss = require('clean-css')
const fs = require('fs')
const path = require('path')
const process = require('process')

const directoryToMinify = 'css'

fs.readdir(directoryToMinify, function(err, data) {
    if(err) return console.log(err)

    console.log(`Minifying the ${directoryToMinify} directory...\n`);

    data.forEach(item => {
        fs.stat(`css/${item}`, (err, stats) => {
            if(stats.isDirectory()) {
                const filePath = `css/${item}/index.css`

                if(!fs.existsSync(filePath)) return false

                const output = new CleanCss({ rebase: false }).minify([filePath])

                fs.writeFile(filePath, output.styles, err => {
                    if(err) return console.log(err)

                    const efficiency = Math.round (Number(output.stats.efficiency) * 100 )
                    console.log('\x1b[1m%s\x1b[0m', `${efficiency}%`, `smaller: ${item}/index.css`);
                })
            }
        })
    })
})
