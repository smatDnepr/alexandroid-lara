const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.webpackConfig({
    externals: {
        "jquery": "jQuery"
    }
});



mix.js('resources/js/app.js', 'public/js')
.postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
]);



mix.styles([
	'resources/front-assets/css/reset.css',
	'resources/front-assets/css/btn.css',
	'resources/front-assets/css/main.css',
],
'public/assets/css/all.css');

mix.copyDirectory('resources/front-assets/img', 'public/assets/img');

mix.js('resources/front-assets/js/jqueryScrollbar/jquery.scrollbar.js', 'public/assets/js/jqueryScrollbar/jquery.scrollbar.js')
   .styles('resources/front-assets/js/jqueryScrollbar/jquery.scrollbar.css', 'public/assets/js/jqueryScrollbar/jquery.scrollbar.css');

mix.js('resources/front-assets/js/slick/slick.js', 'public/assets/js/slick/slick.js')
   .styles('resources/front-assets/js/slick/slick.css', 'public/assets/js/slick/slick.css')
   .copy('resources/front-assets/js/slick/ajax-loader.gif', 'public/assets/js/slick/ajax-loader.gif');

mix.js('resources/front-assets/js/SmoothScroll.js', 'public/assets/js/SmoothScroll.js')
   .js('resources/front-assets/js/jquery.smatEqualItemsHeight.js', 'public/assets/js/jquery.smatEqualItemsHeight.js')
   .js('resources/front-assets/js/jquery.maskedinput-1.4.1.min.js', 'public/assets/js/jquery.maskedinput-1.4.1.min.js')
   .js('resources/front-assets/js/gsap3/gsap.min.js', 'public/assets/js/gsap3/gsap.min.js')
   .js('resources/front-assets/js/gsap3/ScrollTrigger.min.js', 'public/assets/js/gsap3/ScrollTrigger.min.js')
   .js('resources/front-assets/js/animate.js', 'public/assets/js/animate.js')
   .js('resources/front-assets/js/main.js', 'public/assets/js/main.js');





// mix.js([
// 	'',

// ],
// 'public/assets/js/scripts.js');
