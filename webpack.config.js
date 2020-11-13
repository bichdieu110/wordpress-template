/*
---------------------------------------
Webpack config
To build js and css
---------------------------------------
August, 2020
---------------------------------------
Reference: URLs
https://qiita.com/fuubit/items/02a78744196e17869548
https://qiita.com/KZ-taran/items/b4e5a5c20d1b1e02ed23
---------------------------------------
*/

// options: development, production, none
const MODE = 'development';
const enabledSourceMap = MODE === 'development';

const path = require('path');
const Fiber = require('fibers');

// Plugins to override
// const TerserPlugin = require('terser-webpack-plugin');
const OptimizeCssAssetPlugin = require('optimize-css-assets-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

// Used in jQuery
const webpack = require('webpack');


module.exports = {
    // Entry point
    // https://webpack.js.org/configuration/entry-context/#entry
    entry: {
        'bundle': './src/js/common.js',
        'demo': './src/js/demo.js'
    },
    output: {
        // The "absolute path" directory to output the built files
        // https://webpack.js.org/configuration/output/#outputpath
        path: path.resolve(__dirname, 'js'),
        filename: '[name].js',
    },

    // Set build mode
    // options: development, production, none
    // https://webpack.js.org/concepts/mode/#mode-development
    mode: MODE,
    devtool: 'source-map',

    // Set loaders
    module: {
        rules: [
            {
                // Target loader // .js
                test: /\.js$/,
                exclude: /node_modules/,
                use: [
                    {
                        loader: 'babel-loader',
                        options: {
                            // ES5に変換
                            presets: ['@babel/preset-env', '@babel/preset-react']
                        },
                    }
                ]
            },
            {
                // Target loader // .scss
                test: /\.(css|sass|scss)/,
                use: [
                    'style-loader',
                    {
                        loader: MiniCssExtractPlugin.loader,
                        options: {
                            sourceMap: enabledSourceMap,
                            publicPath: path.resolve(__dirname, 'css'),
                            hmr: process.env.NODE_ENV === 'development',
                        }
                    },
                    {
                        loader: 'css-loader',
                        options: {
                            sourceMap: enabledSourceMap,

                            // Set 2 for processing Sass+PostCSS
                            // 0 => no loaders (default);
                            // 1 => postcss-loader;
                            // 2 => postcss-loader, sass-loader
                            importLoaders: 2,

                            // Do not include the url() method in CSS
                            url: false,
                        }
                    },

                    // Configurate for PostCSS (Autoprefixer)
                    // The plugin for PostCSS to add vendor prefixes
                    {
                        loader: 'postcss-loader',
                        options: {
                            sourceMap: enabledSourceMap,
                            plugins: [
                                require('autoprefixer')({
                                    grid: true,
                                }),
                                require('css-declaration-sorter')({
                                    order: 'smacss',
                                })
                            ]
                        }
                    },

                    // The function to bundle sass
                    {
                        loader: 'sass-loader',
                        options: {
                            sourceMap: enabledSourceMap,
                            sassOptions: {
                                // Use sass (dart-sass) instead of node-sass
                                implementation: require('sass'),
                                fiber: Fiber
                            }
                        }
                    }
                ]
            }
        ]
    },

    // Plugins settings
    plugins: [
        // Optimization of CSS extracted from JS
        new OptimizeCssAssetPlugin({
            assetNameRegExp: /\.optimize\.css$/g,
            cssProcessor: require('cssnano'),
            cssProcessorPluginOptions: {
                preset: ['default',
                    {
                        discardComments: {
                            removeAll: true
                        }
                    }
                ]
            },
            canPrint: true
        }),

        // Extract the style parts from the built JS file and output as a CSS file
        // The contents of CSS are removed from the JS file
        new MiniCssExtractPlugin({
            filename: '../css/bundle.css',
            chunkFilename: '[id].css'
        }),

        // browser-sync settings
        new BrowserSyncPlugin({
            watch: true,
            server: './',
            files: [
                './*.html',
                './js/**/*.js',
                './css/**/*.css'
            ],
            // reloadDelay: 1000
        }),

        // jQuery
        new webpack.ProvidePlugin({
            jQuery: 'jquery',
            $: 'jquery',
            'window.jQuery': 'jquery'
        })
    ]
}