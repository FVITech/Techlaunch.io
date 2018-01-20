const CleanCss = require('clean-css')
const fs = require('fs')
const { resolve } = require('path')

const directoryToMinify = 'build/css'

fs.readdir(resolve(__dirname, '../', directoryToMinify), function(err, data) {
    if(err) return console.log(err)

    console.log(`Minifying the ${directoryToMinify} directory...\n`);

    data.forEach(item => {
        fs.stat(`build/css/${item}`, (err, stats) => {
            if(stats.isDirectory()) {
                const filePath = `build/css/${item}/index.css`

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
