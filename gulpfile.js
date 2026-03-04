const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const path = require("path");
const fs = require("fs");

const currentDir = process.cwd();

// ✅ Chỉ compile file chính
const mainScss = path.join(currentDir, "assets/scss/style.scss");
const watchScss = path.join(currentDir, "assets/scss/**/*.scss");
const cssPath = path.join(currentDir, "assets/css");

gulp.task("scss", function () {
  if (!fs.existsSync(path.join(currentDir, "assets/scss"))) {
    console.log("⚠️ Không tìm thấy thư mục assets/scss trong project này.");
    return Promise.resolve();
  }

  return gulp
    .src(mainScss)
    .pipe(
      sass({
        outputStyle: "expanded",
        quietDeps: true, // 🔥 giảm spam warning
      }).on("error", sass.logError)
    )
    .pipe(gulp.dest(cssPath));
});

gulp.task("watch", function () {
  console.log(`👀 Watching SCSS in: ${watchScss}`);
  gulp.watch(watchScss, gulp.series("scss"));
});

gulp.task("default", gulp.series("scss", "watch"));
