'use strict'

import Plugins from 'gulp-load-plugins'
import Yargs from 'yargs'
import BrowserSync from 'browser-sync'
import Gulp from 'gulp'
import Util from 'gulp-util'
import Panini from 'panini'
import Rimraf from 'rimraf'
import Yaml from 'js-yaml'
import Fs from 'fs'
import Path from 'path'
import Webpack from 'webpack'
import WebpackStream from 'webpack-stream'
import Named from 'vinyl-named'
import Rev from 'gulp-rev'
import PostcssAnt from 'postcss-ant'
import Pixrem from 'pixrem'
import Autoprefixer from 'autoprefixer'
import {
  exec
} from 'child_process'


// --- setup ---

// load all gulp plugins
const $ = Plugins()

// check for '--production'
const PRODUCTION = !!(Yargs.argv.production)

// load config.yml
const CONFIG = Yaml.load(Fs.readFileSync('config.yml', 'utf8'))
const PATHS = CONFIG.paths

// helpers
const dist = (p) => p ? `${PATHS.dist}/${p}` : PATHS.dist


// --- webpack setup ---

const wpOptions = {
  output: {
    filename: '[name].js'
  },
  resolve: {
    modules: PATHS.js.include,
    extensions: [
      '.js',
      '.jsx',
      '.json',
    ],
  },
  module: {
    rules: [{
        test: /.js$/,
        loader: 'buble-loader',
        options: {
          transforms: { dangerousTaggedTemplateString: true }
        }
      },
      {
        test: /.json$/,
        use: 'json-loader',
        exclude: PATHS.js.exclude_loaders,
      },
    ]
  }
}

if (!PRODUCTION) {
  wpOptions.devtool = 'cheap-eval-source-map'
} else {
  wpOptions.plugins = [
    new Webpack.optimize.UglifyJsPlugin({
      compress: {
        warnings: false
      }
    }),
    new Webpack.DefinePlugin({
      'process.env.NODE_ENV': JSON.stringify('production')
    }),
  ]
}


// --- tasks ---

// build dist
Gulp.task('build',
  Gulp.series(clean, Gulp.parallel(css, js, fonts)))

// default task: build, serve and watch for changes
Gulp.task('default',
  Gulp.series('build', devServer, watch))

// remove entire dist
function clean(done) {
  Rimraf(dist(), done)
}

function fonts() {
  return Gulp.src(PATHS.fonts.include)
    .pipe(Gulp.dest(dist(PATHS.fonts.output_dir)))
}

// compile sass -> css; minify in production
function css() {
  return Gulp.src(PATHS.css.entry)
    .pipe($.sourcemaps.init())
    .pipe($.sass({
        includePaths: PATHS.css.include
      })
      .on('error', $.sass.logError))
    .pipe($.postcss([
      PostcssAnt(),
      Autoprefixer({
        grid: true,
        browsers: CONFIG.autoprefixer_compatibility
      }),
      Pixrem(),
    ]))
    .pipe($.if(PRODUCTION, $.cssnano()))
    .pipe($.if(!PRODUCTION, $.sourcemaps.write()))
    // Uncomment if using manifest
    // .pipe($.if(PRODUCTION, $.rev()))
    .pipe(Gulp.dest(dist()))
    // .pipe($.if(PRODUCTION, $.rev.manifest()))
    // .pipe($.if(PRODUCTION, Gulp.dest(dist())))
    .pipe(BrowserSync.reload({
      stream: true
    }))
}

// bundle js with webpack; adjust for dev vs. production
function js() {
  return Gulp.src(PATHS.js.entry)
    .pipe(Named())
    .pipe(WebpackStream(wpOptions, Webpack))
    .pipe(Gulp.dest(dist()))
}

// start browsersync; open in browser
function devServer(done) {
  const server = CONFIG.dev_server

  const bsOptions = {
    port: server.port,
    notify: false,
    open: false,
  }
  if (server.back)
    bsOptions.proxy = server.domain
  else
    bsOptions.server = dist()

  BrowserSync.init(bsOptions)
  done()

  exec(`open http://${server.domain}:${server.port}`)
}

function reload(done) {
  BrowserSync.reload()
  if (typeof done === 'function')
    done()
}

function watch() {
  Gulp.watch(PATHS.fonts.watch).on('all', Gulp.series(fonts, reload))
  Gulp.watch(PATHS.css.watch).on('all', css)
  Gulp.watch(PATHS.js.watch).on('all', Gulp.series(js, reload))
}