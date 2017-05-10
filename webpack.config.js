const webpack = require('webpack')
const ExtractTextPlugin = require('extract-text-webpack-plugin')

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
                use: ['babel-loader']
            }, {
                test: /\.scss$/,
                use: ExtractTextPlugin.extract({
                    use: [
                        'css-loader',
                        {
                            loader: 'postcss-loader',
                            options: {
                                plugins: () => [require('autoprefixer')({browsers: ['> 1%']})]
                            }
                        },
                        'sass-loader'
                    ]
                })
            }, {
                test: /\.(jpg|jpeg|png|gif|svg)$/,
                use: [{
                    loader: 'file-loader',
                    options: {
                        name: '[path][name].[ext]',
                        outputPath: '../'
                    }
                }]
            }
        ]
    },
    plugins: [
        new ExtractTextPlugin('./css/bundle.css')
    ]
}
