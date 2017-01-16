import path from 'path';
import watch from 'gulp-watch';

function fonts(gulp, config) {
  const fontsSrc = path.resolve(__dirname, '..', config.paths.source.fonts, '**/*');
  const fontsDest = path.resolve(__dirname, '..', config.paths.destination.fonts);

  const copyFonts = function (doWatch) {
    if (!config.paths.source.fonts || !config.paths.destination.fonts) {
      return Promise.resolve(null);
    }
    let chain = gulp.src(fontsSrc);
    if (doWatch) {
      chain = chain.pipe(watch(fontsSrc));
    }
    chain.pipe(gulp.dest(fontsDest));
    if (!doWatch) {
      return new Promise((resolve) => {
        chain.on('end', resolve);
      });
    }
    return Promise.resolve(null);
  };

  gulp.task('fonts', () => copyFonts(false));
  gulp.task('fonts-watch', () => copyFonts(true));
}

function images(gulp, config) {
  const imagesSrc = path.resolve(__dirname, '..', config.paths.source.images, '**/*');
  const imagesDest = path.resolve(__dirname, '..', config.paths.destination.images);

  const copyImages = function (doWatch) {
    if (!config.paths.source.images || !config.paths.destination.images) {
      return Promise.resolve(null);
    }
    let chain = gulp.src(imagesSrc);
    if (doWatch) {
      chain = chain.pipe(watch(imagesSrc));
    }
    chain.pipe(gulp.dest(imagesDest));
    if (!doWatch) {
      return new Promise((resolve) => {
        chain.on('end', resolve);
      });
    }
    return Promise.resolve(null);
  };

  gulp.task('images', () => copyImages(false));
  gulp.task('images-watch', () => copyImages(true));
}

export default function (gulp, config) {
  fonts(gulp, config);
  images(gulp, config);
  return null;
}
