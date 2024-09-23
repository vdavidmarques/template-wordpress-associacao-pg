const gulp = require('gulp');
const cleanCSS = require('gulp-clean-css');
const terser = require('gulp-terser');
const sass = require('gulp-sass')(require('sass'));

// Tarefa para compilar o Sass e minificar o CSS
gulp.task('styles', function() {
    console.log("Iniciando a compilação de Sass...");
    return gulp.src('src/sass/**/*.scss') // Caminho dos arquivos Sass
        .pipe(sass().on('error', sass.logError))
        .pipe(cleanCSS())
        .pipe(gulp.dest('dist/css')); // Pasta de destino dos arquivos minificados
});

// Tarefa para minificar JavaScript
gulp.task('scripts', function() {
    console.log("Iniciando a minificação de JavaScript...");
    return gulp.src('src/js/**/*.js') // Caminho dos arquivos JavaScript
        .pipe(terser())
        .pipe(gulp.dest('dist/js')); // Pasta de destino dos arquivos minificados
});

// Tarefa padrão para rodar as tarefas styles e scripts
gulp.task('default', gulp.parallel('styles', 'scripts'));
