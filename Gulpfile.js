const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));

gulp.task("sass", function () {
    return gulp
        .src("scss/*.scss") // Chemin des fichiers Sass source
        .pipe(sass({
            includePaths: ["./node_modules"],
            outputStyle: "compressed" // On active la minification
        })) // Compile Sass en CSS
        .pipe(gulp.dest("css")); // Chemin de destination pour les fichiers CSS compilés
});

gulp.task("watch", function () {
    gulp.watch("scss/*.scss", gulp.series("sass")); // Surveiller les modifications des fichiers Sass et exécuter la tâche 'sass'
});

gulp.task("default", gulp.series("sass", "watch")); // Tâche par défaut pour exécuter 'sass' et 'watch' en séquence