import path from 'path';
import plumber from 'gulp-plumber';
import sass from 'gulp-sass';
import sourcemaps from 'gulp-sourcemaps';
import postcss from 'gulp-postcss';
import autoprefixer from 'autoprefixer';
import cleanCss from 'gulp-clean-css';
import watch from 'gulp-watch';

export default function (gulp, config) {

  const cssSourcePath = path.resolve(__dirname, '..', config.paths.source.scss, '**/*.scss');
  const cssDestPath = path.resolve(__dirname, '..', config.paths.destination.scss);

  const buildScss = function (minify) {
    if (!config.features.css.enabled) {
      return Promise.resolve(null);
    }

    let chain = gulp.src(cssSourcePath).pipe(plumber({ errorHandler: (err) => {
      handleErrors('SCSS', err);
    } })).pipe(sass());

    if (!minify) {
      chain = chain.pipe(sourcemaps.init());
    }

    if (config.features.css.autoprefix.enabled) {
      chain = chain.pipe(postcss([autoprefixer(config.features.css.autoprefix.settings)]));
    }

    if (!minify) {
      chain = chain.pipe(sourcemaps.write());
    }

    if (minify && config.features.css.minify) {
      chain = chain.pipe(cleanCss());
    }

    chain = chain.pipe(gulp.dest(cssDestPath));

    return new Promise((resolve) => {
      chain.on('end', resolve);
    });
  };

  gulp.task('css', () => buildScss(false));

  gulp.task('css-minified', () => buildScss(true));

  gulp.task('css-watch', () => {
    watch(cssSourcePath, () => {
      buildScss(false);
    });
    return buildScss(false);
  });

  return null;
}
