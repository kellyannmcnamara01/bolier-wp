// https://coder-coder.com/gulp-tutorial-beginners/
// https://www.hongkiat.com/blog/access-localhost-public-address/
// https://github.com/gulpjs/gulp/tree/v3.9.1/docs
// https://medium.com/@warrebuysse/1-the-road-to-senior-gulp-file-include-9793292fbb22





/* Initialize packages
 *
 * In order to take advantage of all the features of the npm packages you added to your project, you need to export them as modules in Node. (Hence the folder name “node_modules”)
 ============================================= */
var gulp = require('gulp');
var cssnano = require('gulp-cssnano');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var browserSync = require('browser-sync').create();




/* Local Host
 *
 * create const var for localhost url
============================================= */

const LOCALSERVER = "local.boiler-wp";




/* Create your Gulp tasks
 *
 * This allows you to run the Gulp task by typing in gulp [Function Name] into the command line. This is important because you can then run that named function from other Gulp tasks.
 * Specifically, we are building several different Gulp tasks, which will *all* be run when you run the default Gulp task.
 * -- .task() — Creates a task, as mentioned above
 * -- .src() — identifies what files you will be compiling in a particular task
 * -- .pipe() — adds a function to the Node stream that Gulp is using; you can pipe multiple functions in the same task (read an excellent write-up on this topic on florian.ec)
 * -- .dest() — writes the resulting file to a specific location
 * -- .watch() — identifies the files to detect any changes on
============================================= */




/* SCSS Tasks
============================================= */

gulp.task('sass', function(){
    return gulp.src('assets/src/styles/**/*.scss')
        .pipe(sass())
        .pipe(cssnano())
        .pipe(browserSync.stream())
        .pipe(gulp.dest('assets/dist/css'));
});

// IE SCSS Task
gulp.task('iesass', function(){
    return gulp.src('assets/src/ie-styles/**/*.scss')
        .pipe(sass())
        .pipe(cssnano())
        .pipe(browserSync.stream())
        .pipe(gulp.dest('assets/dist/css'));
});

// Admin SCSS Task
gulp.task('adminsass', function(){
    return gulp.src('assets/src/admin-styles/**/*.scss')
        .pipe(sass())
        .pipe(cssnano())
        .pipe(browserSync.stream())
        .pipe(gulp.dest('assets/dist/css'));
});





/* JS Tasks
============================================= */

gulp.task('js', function(){
    return gulp.src([
            'assets/src/scripts/partials/cookies.js',
            'assets/src/scripts/partials/navigation.js',
            'assets/src/scripts/partials/ajax-filters.js',
            'assets/src/scripts/scripts.js'
        ])
        .pipe(concat('scripts.js'))
        .pipe(uglify())
        .pipe(browserSync.stream())
        .pipe(gulp.dest('assets/dist/js'));
});



/* PHP Task
============================================= */

gulp.task('php', function(){
    return gulp.src()
});




/* Watch Task
 *
 * The Watch task will watch the files that you tell it to for any changes. Once it detects a change, it will run the tasks that you designate and then continue watching for changes.
 * The watch() function takes two parameters: the source location, and then the tasks to run when a change is detected.
 * The Sass Watch function will watch any SCSS files in the app folder and then run the Sass task if it detects changes.
 * For the JavaScript Watch function, we’ll have to take advantage of a really useful Node feature called “globbing.” Globbing refers to using the “**” symbols as a kind of wildcard for folders and subfolders. We need it for the JS files because we have a JS file in the app/js folder, and a JS file in the app/js/plugins folder.
============================================= */

gulp.task('watch', function(){
    browserSync.init({
        proxy: {
            target: LOCALSERVER
        }, 
        host: 'localhost'
    });

    gulp.watch('assets/src/styles/**/*.scss', gulp.series('sass'));
    gulp.watch('assets/src/ie-styles/**/*.scss', gulp.series('iesass'));
    gulp.watch('assets/src/admin-styles/**/*.scss', gulp.series('adminsass'));
    gulp.watch('assets/src/scripts/**/*.js', gulp.series('js'));
});




/* Deafult Gulp Task
 *
 * The default Gulp task is what you want to run when you just type in gulp in the command line. When you create the task, you have to call it “default” in order for Gulp to recognize that that’s what you want to run.
 * What we’d like to do is run the Sass and JS tasks once, then run the Watch task to re-run tasks when files are changed.
============================================= */

gulp.task('default', gulp.series('sass', 'iesass', 'adminsass', 'js', 'watch'));
















