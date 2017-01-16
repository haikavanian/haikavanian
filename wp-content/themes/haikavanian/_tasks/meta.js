import runSequence from 'run-sequence';

export default function (gulp) {
  gulp.task('build', (done) => {
    runSequence(
      'images',
      'fonts',
      'css-minified',
      'js-production',
      done
    );
  });

  gulp.task('watch', (done) => {
    runSequence(
      [
        'css-watch',
        'images-watch',
        'fonts-watch',
        'js-watch',
      ],
      done
    );
  });
  return ['build', 'watch'];
}
