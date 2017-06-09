const webpack = require('webpack')
require('dotenv').config()
const COMPUTER = process.env.COMPUTER

module.exports = {
    entry: './js/index.js',
    output: {
        filename: './js/bundle.js',
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /(node_modules)/,
                use: [{
                    loader: 'babel-loader',
                    options: {
                        presets: [
                            ['env', {modules: false}],
                            'stage-0'
                        ]
                    }
                }]
            }
        ]
    },
    devServer:{
      proxy: {
        // "^http://localhost:8080/$": {
        //   target: "http://localhost/Techlaunch.io/index.php",
        // },
        "*":{
          target: `http://localhost/${COMPUTER === 'brentsMac' && '~brenton/'}Techlaunch.io/`
        }
      }
    }
}
