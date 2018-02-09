var gulp = require('gulp'),
    imagemin = require('gulp-imagemin'),
    del = require('del'),
    usemin = require('gulp-usemin'),
    rev = require('gulp-rev'),
    cssnano = require('gulp-cssnano'),
    uglify = require('gulp-uglify'),
    wpRev = require('gulp-wp-rev');


gulp.task('deleteDistFolder', function () {
    return del('./dist');
});

gulp.task('optimizeImages', ['deleteDistFolder', 'icons'], function () {
    return gulp.src(['./app/assets/images/**/*', '!./app/assets/images/icons', '!./app/assets/images/icons/**/*'])
        .pipe(imagemin({
            progressive: true,
            interlaced: true,
            multipass: true
        }))
        .pipe(gulp.dest("./dist/assets/images"));
});

gulp.task('usemin', ['deleteDistFolder', 'styles', 'scripts'], function () {
    return gulp.src('./app/index.html')
        .pipe(usemin({
            css: [function () {
                return rev()
            }, function () {
                return cssnano()
            }],
            js: [function () {
                return rev()
            }, function () {
                return uglify()
            }]
        }))
        .pipe(gulp.dest('./dist'))
});

gulp.task('rev', function() {
    gulp.src('./functions.php')
        .pipe(wpRev({
            css: './style.css',
            cssHandle: 'my_assets',
            js: './app/temp/scripts/Vendor.js',
            jsHandle: 'my_assets'
        }))
        .pipe(gulp.dest('./'));
});

gulp.task('copyTheme', ['deleteDistFolder','optimizeImages'], function () {
    return gulp.src([
        './**',
        '!./node_modules/**',
        '!./node_modules',
        '!./app/**',
        '!./app',
        '!./gulp/**',
        '!./gulp',
        '!./images/**',
        '!./images',
        '!./dist/**',
        '!./dist',
        '!./webpack.config.js',
        '!./package-lock.json',
        '!./package.json',
        '!./gulpfile.js',
        '!./npm-shrinkwrap.json',
        '!./.gitignore'
    ])
        .pipe(gulp.dest('./dist'))
});

gulp.task('build', ['deleteDistFolder', 'optimizeImages', 'usemin', 'rev', 'copyTheme']);