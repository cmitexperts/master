'use strict';

const gulp = require('gulp');
const gulpLoadPlugins = require('gulp-load-plugins');
const browser = require('browser-sync');
const config = require('config-yml');
const path = require('path');

const $ = gulpLoadPlugins({
	pattern: ['gulp-*', 'gulp.*', '@*/gulp{-,.}*', 'cli-*', 'webpack-*']
});

// Help
const _default = function (done) {
	console.log('');
	console.log(
		$.cliColor.greenBright(
			'If you are starting a new project, please remember to update the setting paths.site from config.yml'
		)
	);
	console.log('');
	console.log($.cliColor.blackBright('# Initialization tasks'));
	console.log(
		'gulp ' +
			$.cliColor.green('install') +
			'                                             ' +
			$.cliColor.blackBright(
				'# Install UI resources (run once at the beginning of the development process)'
			)
	);
	console.log('');
	console.log($.cliColor.blackBright('# Triggered by `gulp install`'));
	console.log(
		'gulp ' +
			$.cliColor.green('npm-css') +
			'                                             ' +
			$.cliColor.blackBright('# Copy CSS from Node modules to the project')
	);
	console.log(
		'gulp ' +
			$.cliColor.green('npm-fonts') +
			'                                           ' +
			$.cliColor.blackBright('# Copy fonts from Node modules to the project')
	);
	// console.log('gulp ' + $.cliColor.green('npm-foundation') + '                                      ' + $.cliColor.blackBright('# Copy Foundation setting file from Node module to the project'));
	console.log('');
	console.log($.cliColor.blackBright('# Development tasks'));
	console.log(
		'gulp ' +
			$.cliColor.green('init') +
			'                                                ' +
			$.cliColor.blackBright('# Shortcode for `gulp watch`')
	);
	console.log(
		'gulp ' +
			$.cliColor.green('watch') +
			'                                               ' +
			$.cliColor.blackBright('# Watch for changes on files to recompile them')
	);
	console.log(
		'gulp ' +
			$.cliColor.green('build') +
			'                                               ' +
			$.cliColor.blackBright('# Build JavaScript and Sass files')
	);
	console.log('');
	console.log(
		$.cliColor.blackBright(
			'# Triggered by `gulp install`, `gulp watch`, `gulp local` and `gulp serve`:'
		)
	);
	console.log(
		'gulp ' +
			$.cliColor.green('sass') +
			'                                                ' +
			$.cliColor.blackBright('# Combine/compile and compress Sass files')
	);
	console.log(
		'gulp ' +
			$.cliColor.green('sass-print') +
			'                                          ' +
			$.cliColor.blackBright('# Combine/compile and compress Sass print files')
	);
	console.log(
		'gulp ' +
			$.cliColor.green('sass-editor') +
			'                                         ' +
			$.cliColor.blackBright('# Combine/compile and compress Sass editor files')
	);
	console.log(
		'gulp ' +
			$.cliColor.green('js') +
			'                                                  ' +
			$.cliColor.blackBright('# Combine and compress JavaScript files')
	);
	console.log('');

	done();
};

gulp.task('default', _default);

/**
 * Development tasks
 */

// Shortcode for gulp watch
gulp.task('init', function () {
	gulp.start('watch');
});

// Combine/compile and compress Sass files
const _sass = function () {
	return gulp
		.src(config.paths.src_sass)
		.pipe($.sourcemaps.init())
		.pipe(
			$.sass({
				outputStyle: 'compact'
			}).on('error', $.sass.logError)
		)
		.pipe($.autoprefixer())
		.pipe($.sourcemaps.write('.'))
		.pipe(gulp.dest(config.paths.dist_css))
		.pipe($.size())
		.pipe(browser.stream({ match: '**/*.css' }));
};

gulp.task('sass', _sass);

// Combine/compile and compress Sass print files
const _sassPrint = function () {
	return gulp
		.src(config.paths.src_sass_print)
		.pipe($.sourcemaps.init())
		.pipe(
			$.sass({
				outputStyle: 'compact'
			}).on('error', $.sass.logError)
		)
		.pipe($.autoprefixer())
		.pipe($.sourcemaps.write('.'))
		.pipe(gulp.dest(config.paths.dist_css))
		.pipe($.size())
		.pipe(browser.stream({ match: '**/*.css' }));
};

gulp.task('sass-print', _sassPrint);

// Combine/compile and compress Sass editor files
const _sassEditor = function () {
	return gulp
		.src(config.paths.src_sass_editor)
		.pipe($.sourcemaps.init())
		.pipe(
			$.sass({
				includePaths: config.paths.npm_sass,
				outputStyle: 'compact'
			}).on('error', $.sass.logError)
		)
		.pipe($.autoprefixer())
		.pipe($.sourcemaps.write('.'))
		.pipe(gulp.dest(config.paths.dist_css))
		.pipe($.size())
		.pipe(browser.stream({ match: '**/*.css' }));
};

gulp.task('sass-editor', _sassEditor);

// Combine/compile and compress Sass main files
const _sassPage = function () {
	return gulp
		.src(config.paths.src_sass_page)
		.pipe($.sourcemaps.init())
		.pipe(
			$.sass({
				outputStyle: 'compact'
			}).on('error', $.sass.logError)
		)
		.pipe($.autoprefixer())
		.pipe($.sourcemaps.write('.'))
		.pipe(gulp.dest(config.paths.dist_css))
		.pipe($.size())
		.pipe(browser.stream({ match: '**/*.css' }));
};

gulp.task('sass-page', _sassPage);

// Combine/compile and compress Sass single-locations files
const _sassSingleLocations = function () {
	return gulp
		.src(config.paths.src_sass_single_locations)
		.pipe($.sourcemaps.init())
		.pipe(
			$.sass({
				outputStyle: 'compact'
			}).on('error', $.sass.logError)
		)
		.pipe($.autoprefixer())
		.pipe($.sourcemaps.write('.'))
		.pipe(gulp.dest(config.paths.dist_css))
		.pipe($.size())
		.pipe(browser.stream({ match: '**/*.css' }));
};

gulp.task('sass-single-locations', _sassSingleLocations);

// Combine/compile and compress Sass single-op files
const _sassSingleOp = function () {
	return gulp
		.src(config.paths.src_sass_single_op)
		.pipe($.sourcemaps.init())
		.pipe(
			$.sass({
				outputStyle: 'compact'
			}).on('error', $.sass.logError)
		)
		.pipe($.autoprefixer())
		.pipe($.sourcemaps.write('.'))
		.pipe(gulp.dest(config.paths.dist_css))
		.pipe($.size())
		.pipe(browser.stream({ match: '**/*.css' }));
};

gulp.task('sass-single-op', _sassSingleOp);

// Combine/compile and compress Sass template-homepage files
const _sassTemplateHomepage = function () {
	return gulp
		.src(config.paths.src_sass_template_homepage)
		.pipe($.sourcemaps.init())
		.pipe(
			$.sass({
				outputStyle: 'compact'
			}).on('error', $.sass.logError)
		)
		.pipe($.autoprefixer())
		.pipe($.sourcemaps.write('.'))
		.pipe(gulp.dest(config.paths.dist_css))
		.pipe($.size())
		.pipe(browser.stream({ match: '**/*.css' }));
};

gulp.task('sass-template-homepage', _sassTemplateHomepage);

// Combine/compile and compress Sass template-reviews files
const _sassTemplateReviews = function () {
	return gulp
		.src(config.paths.src_sass_template_reviews)
		.pipe($.sourcemaps.init())
		.pipe(
			$.sass({
				outputStyle: 'compact'
			}).on('error', $.sass.logError)
		)
		.pipe($.autoprefixer())
		.pipe($.sourcemaps.write('.'))
		.pipe(gulp.dest(config.paths.dist_css))
		.pipe($.size())
		.pipe(browser.stream({ match: '**/*.css' }));
};

gulp.task('sass-template-reviews', _sassTemplateReviews);

// Combine/compile and compress Sass template-about-us files
const _sassTemplateAboutUs = function () {
	return gulp
		.src(config.paths.src_sass_template_about_us)
		.pipe($.sourcemaps.init())
		.pipe(
			$.sass({
				outputStyle: 'compact'
			}).on('error', $.sass.logError)
		)
		.pipe($.autoprefixer())
		.pipe($.sourcemaps.write('.'))
		.pipe(gulp.dest(config.paths.dist_css))
		.pipe($.size())
		.pipe(browser.stream({ match: '**/*.css' }));
};

gulp.task('sass-template-about-us', _sassTemplateAboutUs);

// Combine/compile and compress Sass template-legacy-about-us files
const _sassTemplateLegacyAboutUs = function () {
	return gulp
		.src(config.paths.src_sass_template_legacy_about_us)
		.pipe($.sourcemaps.init())
		.pipe(
			$.sass({
				outputStyle: 'compact'
			}).on('error', $.sass.logError)
		)
		.pipe($.autoprefixer())
		.pipe($.sourcemaps.write('.'))
		.pipe(gulp.dest(config.paths.dist_css))
		.pipe($.size())
		.pipe(browser.stream({ match: '**/*.css' }));
};

gulp.task('sass-template-legacy-about-us', _sassTemplateLegacyAboutUs);

// Combine/compile and compress Sass template-legacy-locations files
const _sassTemplateLegacyLocations = function () {
	return gulp
		.src(config.paths.src_sass_template_legacy_locations)
		.pipe($.sourcemaps.init())
		.pipe(
			$.sass({
				outputStyle: 'compact'
			}).on('error', $.sass.logError)
		)
		.pipe($.autoprefixer())
		.pipe($.sourcemaps.write('.'))
		.pipe(gulp.dest(config.paths.dist_css))
		.pipe($.size())
		.pipe(browser.stream({ match: '**/*.css' }));
};

gulp.task('sass-template-legacy-locations', _sassTemplateLegacyLocations);

// Combine/compile and compress Sass template-legacy-suboxone-clinics files
const _sassTemplateLegacySuboxoneClinics = function () {
	return gulp
		.src(config.paths.src_sass_template_legacy_suboxone_clinics)
		.pipe($.sourcemaps.init())
		.pipe(
			$.sass({
				outputStyle: 'compact'
			}).on('error', $.sass.logError)
		)
		.pipe($.autoprefixer())
		.pipe($.sourcemaps.write('.'))
		.pipe(gulp.dest(config.paths.dist_css))
		.pipe($.size())
		.pipe(browser.stream({ match: '**/*.css' }));
};

gulp.task(
	'sass-template-legacy-suboxone-clinics',
	_sassTemplateLegacySuboxoneClinics
);

// Combine/compile and compress Sass template-legacy-virtual-rehab files
const _sassTemplateLegacyVirtualRehab = function () {
	return gulp
		.src(config.paths.src_sass_template_legacy_virtual_rehab)
		.pipe($.sourcemaps.init())
		.pipe(
			$.sass({
				outputStyle: 'compact'
			}).on('error', $.sass.logError)
		)
		.pipe($.autoprefixer())
		.pipe($.sourcemaps.write('.'))
		.pipe(gulp.dest(config.paths.dist_css))
		.pipe($.size())
		.pipe(browser.stream({ match: '**/*.css' }));
};

gulp.task(
	'sass-template-legacy-virtual-rehab',
	_sassTemplateLegacyVirtualRehab
);

// Combine and compress JavaScript files
const _jsMain = function () {
	return gulp
		.src(config.paths.src_js)
		.pipe(
			$.webpackStream({
				devtool: 'source-map',
				mode: 'production',
				output: {
					path: path.join(__dirname, config.paths.dist_js.folder),
					filename: config.paths.dist_js.file_app
				},
				module: {
					rules: [
						{
							test: /\.(js|jsx)$/,
							exclude: /(node_modules)/,
							use: 'babel-loader'
						}
					]
				},
				node: {
					fs: 'empty',
					net: 'empty',
					tls: 'empty'
				}
			})
		)
		.pipe(gulp.dest(config.paths.dist_js.folder))
		.pipe($.size());
};

gulp.task('jsMain', _jsMain);

// Combine and compress JavaScript files
const _jsExternals = function () {
	var js_files = config.helpers.all_plugins_js;

	return gulp
		.src(js_files)
		.pipe($.sourcemaps.init())
		.pipe($.concat(config.paths.dist_js.file_externals))
		.pipe($.uglify())
		.pipe($.sourcemaps.write('.'))
		.pipe(gulp.dest(config.paths.dist_js.folder))
		.pipe($.size());
};

gulp.task('jsExternals', _jsExternals);

// Combine and compress JavaScript files (for Internet Explorer)
const _jsExternalsIe = function () {
	var js_files = config.helpers.all_plugins_ie_js;

	return gulp
		.src(js_files)
		.pipe($.sourcemaps.init())
		.pipe($.concat(config.paths.dist_js.file_externals_ie))
		.pipe($.uglify())
		.pipe($.sourcemaps.write('.'))
		.pipe(gulp.dest(config.paths.dist_js.folder))
		.pipe($.size());
};

gulp.task('jsExternalsIe', _jsExternalsIe);

// Build JavaScript files
const _js = gulp.series(_jsMain, _jsExternals, _jsExternalsIe, function (done) {
	done();
});

// Build JavaScript and Sass files
const _build = gulp.series(
	_sass,
	_sassPrint,
	_sassEditor,
	_sassPage,
	_sassSingleLocations,
	_sassSingleOp,
	_sassTemplateHomepage,
	_sassTemplateReviews,
	_sassTemplateAboutUs,
	_sassTemplateLegacyAboutUs,
	_sassTemplateLegacyLocations,
	_sassTemplateLegacySuboxoneClinics,
	_sassTemplateLegacyVirtualRehab,
	_js,
	function (done) {
		done();
	}
);

gulp.task('build', _build);

// Watch for changes on files to recompile them
const _watch = gulp.series(
	_sass,
	_sassPrint,
	_sassEditor,
	_sassPage,
	_sassSingleLocations,
	_sassSingleOp,
	_sassTemplateHomepage,
	_sassTemplateReviews,
	_sassTemplateAboutUs,
	_sassTemplateLegacyAboutUs,
	_sassTemplateLegacyLocations,
	_sassTemplateLegacySuboxoneClinics,
	_sassTemplateLegacyVirtualRehab,
	_js,
	function (done) {
		gulp.watch(config.helpers.all_sass, _sass);
		gulp.watch(config.helpers.all_sass, _sassEditor);
		gulp.watch(config.helpers.all_sass, _sassPage);
		gulp.watch(config.helpers.all_sass, _sassSingleLocations);
		gulp.watch(config.helpers.all_sass, _sassSingleOp);
		gulp.watch(config.helpers.all_sass, _sassTemplateHomepage);
		gulp.watch(config.helpers.all_sass, _sassTemplateReviews);
		gulp.watch(config.helpers.all_sass, _sassTemplateAboutUs);
		gulp.watch(config.helpers.all_sass, _sassTemplateLegacyAboutUs);
		gulp.watch(config.helpers.all_sass, _sassTemplateLegacyLocations);
		gulp.watch(config.helpers.all_sass, _sassTemplateLegacySuboxoneClinics);
		gulp.watch(config.helpers.all_sass, _sassTemplateLegacyVirtualRehab);
		gulp.watch(config.helpers.all_sass_print, _sassPrint);
		gulp.watch(config.helpers.all_app_js, _jsMain);
		gulp.watch(config.helpers.all_plugins_js, _jsExternals);
		gulp.watch(config.helpers.all_plugins_ie_js, _jsExternalsIe);

		gulp.watch('**/*.html').on('change', browser.reload);

		done();
	}
);

gulp.task('watch', _watch);

// Shortcode for gulp watch
const _init = gulp.series(_watch, function (done) {
	done();
});

gulp.task('init', _init);

/**
 * Initialization tasks
 */

// Copy CSS from Node modules to the project
const _npmCss = function () {
	return gulp.src(config.paths.npm_css).pipe(gulp.dest(config.paths.dist_css));
};

gulp.task('npm-css', _npmCss);

// Copy fonts from Node modules to the project
const _npmFonts = function () {
	return gulp
		.src(config.paths.npm_fonts)
		.pipe(gulp.dest(config.paths.dist_fonts));
};

gulp.task('npm-fonts', _npmFonts);

// Copy Foundation setting file from Node module to the project
// const _npmFoundation = function() {
//     return gulp.src(config.foundation.settings.src)
//         .pipe($.concat(config.foundation.settings.dist.file))
//         .pipe(gulp.dest(config.foundation.settings.dist.folder));
// };

// gulp.task('npm-foundation', _npmFoundation);

// Install UI resources (run once at the beginning of the development process, otherwise, you can override custom changes)
const _install = gulp.series(
	_npmCss,
	_npmFonts,
	_sass,
	_sassPrint,
	_sassEditor,
	_sassPage,
	_sassSingleLocations,
	_sassSingleOp,
	_sassTemplateHomepage,
	_sassTemplateReviews,
	_sassTemplateAboutUs,
	_sassTemplateLegacyAboutUs,
	_sassTemplateLegacyLocations,
	_sassTemplateLegacySuboxoneClinics,
	_sassTemplateLegacyVirtualRehab,
	_js,
	function (done) {
		done();
	}
);

gulp.task('install', _install);
