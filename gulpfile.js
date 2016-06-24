var gulp = require('gulp');
var stylus = require('gulp-stylus');
var clean = require('gulp-clean');
var cleanCSS = require('gulp-clean-css');
var plumber = require('gulp-plumber');
var minify = require('gulp-minify');
var htmlmin = require('gulp-htmlmin');
var imagemin = require('gulp-imagemin');

// Copiar arquivos para pasta dist
gulp.task('copy', function() {
    return gulp.src(['src/assets/{img,font}/**/*'], {base: 'src'})
        .pipe(gulp.dest('dist/'));
});

// Apaga os arquivos da pasta dist
gulp.task('clean', function() {
    return gulp.src('dist0', {read: false})
        .pipe(clean());
});

// Compilar Stylus para CSS
gulp.task('stylus', function(){
    return gulp.src('src/assets/stylus/main.styl')
        .pipe(plumber())
        .pipe(stylus())
        .pipe(plumber.stop())
        .pipe(gulp.dest('src/assets/css'))
})

// Minificar CSS
gulp.task('minify-css', function() {
  return gulp.src('src/assets/css/*.css')
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(gulp.dest('dist/assets/css/'));
});

// // Minificar HTML
// gulp.task('minify-html', function() {
//   return gulp.src('src/**/*.html')
//     .pipe(htmlmin({collapseWhitespace: true}))
//     .pipe(gulp.dest('dist/'))
// });

// Minificar JS
gulp.task('minify-js', function() {
  gulp.src('src/assets/js/*.js')
    .pipe(minify({
        ext:{
            src:'-debug.js',
            min:'.js'
        },
        exclude: ['tasks'],
        ignoreFiles: ['.combo.js', '-min.js']
    }))
    .pipe(gulp.dest('dist/assets/js/'))
});

// Otimizar Imagens
gulp.task('imagemin', function() {
    return gulp.src('src/assets/img/**/*')
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [
                {removeViewBox: false},
                {cleanupIDs: false}
            ]
        }))
        .pipe(gulp.dest('dist/assets/img/'));
});

/* Alias */
gulp.task('optimize', ['minify-js', 'minify-css', 'imagemin']);
gulp.task('build', ['clean', 'copy', 'optimize']);
gulp.task('watch', function(){
    gulp.watch('src/assets/stylus/**/*.styl', ['stylus']);
})