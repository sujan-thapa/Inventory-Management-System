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

mix.js("resources/js/app.js", "public/js")
    /*.postCss('resources/css/app.css', 'public/css', [
        //
    ]);*/
    .sass("resources/sass/app.scss", "public/css");

mix.browserSync({
    proxy: "http://localhost:8000",
    // Customise the placement of the snippet
    // and ignore certain paths
    snippetOptions: {
        // Ignore all HTML files within the templates folder
        ignorePaths: "templates/*.html",

        // Provide a custom Regex for inserting the snippet.
        rule: {
            match: /<\/body>/i,
            fn: function (snippet, match) {
                return snippet + match;
            },
        },
    },
});

//for function
mix.disableNotifications();
