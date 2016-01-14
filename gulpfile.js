var gulp = require('gulp'),
    sass = require('gulp-sass'),
    uglify = require('gulp-uglify'),
    minify = require('gulp-minify-css'),
    sourcemaps = require('gulp-sourcemaps'),
    autoprefixer = require('autoprefixer-core'),
    postcss = require('gulp-postcss'),
    rename = require('gulp-rename'),
    browserSync = require('browser-sync').create(),
    watch = require('gulp-watch'),
    gutil = require('gulp-util'),
    jshint = require('gulp-jshint'),
    notify = require('gulp-notify'),
    concat = require('gulp-concat'),
    imagemin = require('gulp-imagemin'),
    pngquant = require('imagemin-pngquant'),
    bless = require('gulp-bless');

var template_path = "./public_html/wp-content/themes/boiler/";
var content_path = "./public_html/wp-content/";

var libraries_location = "./libraries";

var scripts_location = template_path + "javascript";
var coffee_location = template_path + "coffee";
var images_source_location = template_path + "images_src";
var images_output_location = template_path + "images";

var plugins_path = "./public_html/wp-content/plugins/";

var coffee = require('gulp-coffee');

function swallowError( error ) {

    //If you want details of the error in the console
    console.log(error.toString());

    this.emit('end');
}

gulp.task('default', ['sass', 'scripts', 'watch:sass', 'watch:js']);

gulp.task('serve', function () {

    browserSync.init({
        files: template_path + '/stylesheets/*.css',
        proxy: 'www.boilderplate.dev',
        browser: 'google chrome',
        reloadDebounce: 2000
    });

});

gulp.task('coffee', function () {

    gulp.src(coffee_location + '/*.coffee')
        .pipe(coffee({bare: true}).on('error', gutil.log))
        .pipe(gulp.dest(scripts_location))
        .pipe(notify({message: 'Coffee task complete'}));

});

gulp.task('loader', function () {

    return gulp.src([libraries_location + '/loadjscss/loadjscss.js'])
        .pipe(concat('loader.js'))
        .pipe(rename({suffix: '.min'}))
        .pipe(uglify())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(scripts_location + '/min'))
        .pipe(notify({message: 'Loader scripts task complete'}));

});

gulp.task('js', function () {

    gulp.src(scripts_location + '/src/*.js')
        .pipe(sourcemaps.init())
        .pipe(rename({suffix: '.min'}))
        .pipe(uglify()).on('error', swallowError)
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(scripts_location + '/min'))
        .pipe(browserSync.stream())

});

gulp.task('scripts', function () {

    return gulp.src([
            template_path + 'bower_components/bootstrap-sass/assets/javascripts/bootstrap.js',
            template_path + 'bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.js',
            template_path + 'bower_components/responsive-bootstrap-toolkit/dist/bootstrap-toolkit.js',
            template_path + 'bower_components/jquery-validation/dist/jquery.validate.js',
            template_path + 'bower_components/jquery-validation/dist/additional-methods.js',
            template_path + 'bower_components/slick-carousel/slick/slick.js',
            scripts_location + '/*.js',
            scripts_location + '/scripts/*.js',
            plugins_path + '*/assets/javascript/*.js'
        ])
        .pipe(concat('main.js'))
        .pipe(rename({suffix: '.min'}))
        .pipe(uglify())
        .pipe(gulp.dest(scripts_location + '/min'))
        .pipe(notify({message: 'Main script task complete'}));

});

gulp.task('sass', function () {

    return gulp.src([
            template_path + 'scss/theme.scss',
            plugins_path + '*/assets/scss/*.scss'
        ])
        .pipe(sourcemaps.init())
        .pipe(sass()).on('error', swallowError)
        .pipe(postcss([autoprefixer({browsers: ['last 2 versions']})])).on('error', swallowError)
        .pipe(minify()).on('error', swallowError)
        .pipe(concat('theme.css'))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(template_path + '/stylesheets'))
        .pipe(notify({message: 'Sass standard task complete'}))
        .pipe(bless())
        .pipe(gulp.dest(template_path + '/stylesheets/split'))
        .pipe(notify({message: 'Sass bless task complete'}))

});

gulp.task('sass.alt', function () {

    return gulp.src([
            template_path + 'scss.alt/*.scss',
        ])
        .pipe(sourcemaps.init())
        .pipe(sass()).on('error', swallowError)
        .pipe(postcss([autoprefixer({browsers: ['last 2 versions']})])).on('error', swallowError)
        .pipe(minify()).on('error', swallowError)
        .pipe(concat('alt-styles.css'))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(template_path + '/stylesheets'))
        .pipe(notify({message: 'Sass task complete'}))

});

gulp.task('images', function () {

    return gulp.src(images_source_location + '/**')

        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        }))
        .on('error', gutil.log)

        .pipe(gulp.dest(images_output_location))
        .on('error', gutil.log)
});

gulp.task('uploads', function () {

    return gulp.src(content_path + 'uploads_src/**')

        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        }))
        .on('error', gutil.log)

        .pipe(gulp.dest(content_path+'uploads/'))
        .on('error', gutil.log)
});

gulp.task('watch:js', function () {
    gulp.watch(template_path + '/javascript/src/*.js', ['js']);
});

gulp.task('watch:sass', function () {
    gulp.watch(template_path + '/scss/*.scss', ['sass']);

});
