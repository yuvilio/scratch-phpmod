const path = require('path')
const globule = require('globule')
const CleanWebpackPlugin = require('clean-webpack-plugin')
const CopyWebpackPlugin = require('copy-webpack-plugin')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const autoprefixer = require('autoprefixer')
const UglifyJsPlugin = require('uglifyjs-webpack-plugin')
const OptimizeCSSAssetsPlugin = require('optimize-css-assets-webpack-plugin')
const HtmlWebpackPlugin = require('html-webpack-plugin')
const BrowserSyncPlugin = require('browser-sync-webpack-plugin')

const src = './src'
const dist = './dist'

const app = {
  entry: {
    script: `${src}/index.js`
  },
  output: {
    filename: 'script.js',
    path: path.resolve(__dirname, dist),
    publicPath: '/'
  },
  resolve: {
    extensions: [
      '.js',
      '.css',
      '.styl',
      '.html',
      '.php',
      '.pug',
      '.png',
      '.jpg',
      '.gif',
      '.svg',
      '.ico'
    ],
  },
  module: {
    rules: [
      {
        test: /\.pug$/,
        exclude: /node_modules/,
        use: [
          {
            loader: 'pug-loader',
            options: {
              pretty: true,
              root: path.resolve(__dirname, 'src/documents'),
            }
          },
        ],
      },
      {
        test: /\.js?$/,
        exclude: /node_modules\/(?!(dom7|ssr-window|swiper)\/).*/,
        use: 'babel-loader'
      },
      {
        test: /\.css$/,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader'
        ]
      },
      {
        test: /\.styl$/,
        exclude: /node_modules/,
        use: [
          MiniCssExtractPlugin.loader,
          {
            loader: 'css-loader',
            options: {
              url: false,
            }
          },
          {
            loader: 'postcss-loader',
            options: {
              plugins: [
                autoprefixer({
                  grid: true,
                  flexbox: true,
                  browsers: [
                    'last 2 versions',
                    'ie >= 11'
                  ]
                })
              ]
            }
          },
          {
            loader: 'stylus-loader',
            options: {
              sourceMap: true
            }
          },
        ]
      },
      {
        test: /\.(jpg|png|gif)$/,
        use: [
          {
            loader: 'file-loader',
            options: {
              name: '[name].[ext]',
              outputPath: 'images/',
            }
          }
        ]
      },
      {
        test: /\.svg$/,
        use: [
          'svg-sprite-loader',
          'svg-transform-loader',
          'svgo-loader'
        ]
      }
    ]
  },
  plugins: [
    new CleanWebpackPlugin(`${dist}`),
    new BrowserSyncPlugin({
      server: {
        baseDir: dist
      },
      host: 'localhost',
      port: 3000,
      open: 'external',
      https: false
    }),
    new MiniCssExtractPlugin(
      {
        filename: 'style.css',
        chunkFilename: '[id].css',
      }
    ),
    new CopyWebpackPlugin([
      {
        from: `${src}`,
        to: `../${dist}`,
        ignore: [
          '_*.*',
          '.DS_Store',
          '*.pug',
          '*.js',
          '*.styl',
          '*.svg',
        ]
      }
    ]),
  ],
  optimization: { // css minify
    minimizer: [
      new UglifyJsPlugin({
        cache: true,
        parallel: true,
        sourceMap: true
      }),
      new OptimizeCSSAssetsPlugin()
    ]
  },
}
const docs = globule.find(
  './src/documents/**/*.pug', {
    ignore: [
      './src/documents/**/_*/*.pug'
    ]
  }
)
docs.forEach((e) => {
  if (e.match(/_template/)) {
    const dirName = e.replace('./src/documents/', '').replace('/_template.pug', '')
    const json = e.replace('_template', '_data').replace('.pug', '.json')
    const data = require(json)
    Object.keys(data).forEach((f) => {
      const fileName = f
      app.plugins.push(
        new HtmlWebpackPlugin({
          filename: `${dirName}/${fileName}.html`,
          template: e,
          data: data[f]
        })
      )
    })
  }
  else {
    const fileName = e.replace('./src/documents/', '').replace('.pug', '.html')
    app.plugins.push(
      new HtmlWebpackPlugin({
        filename: `${fileName}`,
        template: e,
      })
    )
  }
})

module.exports = app
