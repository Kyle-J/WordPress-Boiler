var gulp = require('gulp');
var sass = require('gulp-sass');
var watch = require('gulp-watch');
var rename = require('gulp-rename');
var gutil = require( 'gulp-util' );
var minify_css = require('gulp-minify-css');

var jquery = require('gulp-jquery');

var jshint = require('gulp-jshint');
var uglify = require('gulp-uglify');
var notify = require('gulp-notify');
var concat = require('gulp-concat');
var sourcemaps = require('gulp-sourcemaps');

var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');

var template_path = "./public_html/wp-content/themes/bootstrap/"

var scss_location = template_path + "scss";
var stylesheets_location = template_path + "stylesheets";
var scripts_location = template_path + "javascript";
var coffee_location = template_path + "coffee";
var images_source_location = template_path + "images_src";
var images_output_location = template_path + "images";

var coffee = require('gulp-coffee');

gulp.task('default', function() {

});

gulp.task('coffee', function() {

    gulp.src(coffee_location+'/*.coffee')
        .pipe(coffee({bare: true}).on('error', gutil.log))
        .pipe(gulp.dest(scripts_location))
        .pipe(notify({ message: 'Coffee task complete' }));

});

gulp.task('scripts', function() {

    return gulp.src([

        scripts_location+'/vendor/bootstrap.js',
        scripts_location+'/toolkit.js',
        scripts_location+'/*.js',
        scripts_location+'/vendor/*.js'

    ])

        //.pipe(jshint(scripts_location+'/.jshintrc'))
        //.pipe(jshint.reporter('default'))

        .pipe(concat('main.js'))

        //.pipe(gulp.dest(scripts_location))

        .pipe(rename({suffix: '.min'}))
        .pipe(uglify())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(scripts_location + '/min'))
        .pipe(notify({ message: 'Scripts task complete' }));

});

gulp.task('sass', function() {

    gulp.src(scss_location+'/print.scss')
        .pipe(sass({ sourceComments: 'map' }))
        //.pipe(gulp.dest(stylesheets_location))
        .pipe(minify_css().on('error', gutil.log))
        .pipe(rename({ extname: '.css' }))
        .pipe(gulp.dest(stylesheets_location));


    return gulp.src(scss_location+'/theme.scss')
        .pipe(sass({ sourceComments: 'map' }))
        //.pipe(gulp.dest(stylesheets_location))
        .pipe(minify_css().on('error', gutil.log))
        .pipe(rename({ extname: '.css' }))
        .pipe(gulp.dest(stylesheets_location))
        .pipe(notify({ message: 'Sass task complete' }));

});

gulp.task('images', function() {

    return gulp.src(images_source_location + '/**')

        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        }))

        .pipe(gulp.dest(images_output_location));
});

gulp.task('sass:watch', function () {

    gulp.watch(scss_location,'/theme.scss', ['sass']);
    gulp.watch(scss_location,'/print.scss', ['sass']);

});