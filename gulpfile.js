const gulp = require( 'gulp' );
const sass = require( 'gulp-sass' );
const postcss = require( 'gulp-postcss' );
const stylelint = require( 'gulp-stylelint' );
const autoprefixer = require( 'autoprefixer' );
const livereload = require( 'gulp-livereload' );

function css() {
	const processors = [ autoprefixer() ];
	return gulp
		.src( './sass/*.scss' )
		.pipe( sass().on( 'error', sass.logError ) )
		.pipe( postcss( processors ) )
		.pipe( gulp.dest( '.' ) )
		.pipe( livereload() );
}

function lint() {
	return gulp.src( './sass/**/*.scss' ).pipe(
		stylelint( {
			reporters: [
				{
					formatter: 'string',
					console: true,
				},
			],
		} )
	);
}

function watch() {
	livereload.listen();
	gulp.watch( 'sass/**/*.scss', gulp.series( lint, css ) );
}

exports.css = css;
exports.lint = lint;
exports.default = gulp.series( lint, css, watch );
