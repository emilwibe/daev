"use strict";

import gulp from "gulp";
import sourcemaps from "gulp-sourcemaps";
import concat from "gulp-concat";
import cleanCSS from "gulp-clean-css";
import dartSass from "sass";
import gulpSass from "gulp-sass";
import minify from "gulp-minify";
const sass = gulpSass(dartSass);

const paths = {
  css: [
    //"./src/css/tailwind.build.css",
    "./src/css/animations.scss",
    "./src/css/base.scss",
    "./src/css/layout.scss",
    "./src/css/state.scss",
    "./src/css/modules.scss",
    // FLEX MODULES
    "./src/css/modules/hero.scss",
    "./src/css/modules/client-logos.scss",
    "./src/css/modules/txt-media.scss",
    "./src/css/modules/media-txt.scss",
    "./src/css/modules/media.scss",
    "./src/css/modules/oembed.scss",
    "./src/css/theme.scss"
  ],
  jsFooter: [
    "./src/js/footer/mode-toggle.js"
  ]
}

const buildCSSQA = () => {
  return gulp.src ( paths.css )
    .pipe ( sourcemaps.init() )
    .pipe ( sass().on( "error", sass.logError ) )
    .pipe ( concat( "core.css" ) )
    .pipe ( sourcemaps.write() )
    .pipe ( gulp.dest( "./dist/css" ) )
}

const buildCSSProd = () => {
  return gulp.src ( paths.css )
    .pipe ( sass().on( "error", sass.logError ) )
    .pipe ( concat( "core.min.css" ) )
    .pipe ( cleanCSS() )
    .pipe ( gulp.dest( "./dist/css" ) )
}

const buildJSFooter = () => {
  return gulp.src ( paths.jsFooter )
    .pipe ( concat( "scripts-footer.js" ) )
    .pipe ( minify() )
    .pipe ( gulp.dest( "./dist/js" ) )
}

exports.default = gulp.series( buildCSSQA, buildCSSProd, buildJSFooter);
//exports.watch = gulp.watch(paths, gulp.series( buildCSSQA, buildCSSProd, buildJSFooter));