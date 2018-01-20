const webpack = require('webpack')
require('dotenv').config()

module.exports = {
    entry: './js/index.js',
    output: {
        filename: './build/js/bundle.js',
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
    plugins: [
        new webpack.DefinePlugin({
            root: JSON.stringify('/')
        })
    ],
    devServer:{
      proxy: {
        // "^http://localhost:8080/$": {
        //   target: "http://localhost/Techlaunch.io/index.php",
        // },
        "*":{
          target: 'http://localhost/Techlaunch.io/'
        }
      },
      open: true
    }
}
