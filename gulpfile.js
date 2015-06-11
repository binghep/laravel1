var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

//compile sass or less,compile coffee, merge css, merge js, run test.
elixir(function(mix) {
    mix.less('app.less').coffee();

    mix.styles([   //merging stylesheets into 1: public/css/all.css
        'vendor/normalize.css',
        'app.css'
    ], null, 'public/css');  //2nd arg is the path of output file. by default, it is public/css/all.css

    //mix.scripts([ //merge these js into public/output/script.js. look for these js files in public/js
    //    'vendor/jquery.js',
    //    'main.js',
    //    'coupon.js'
    //], 'public/output/script.js', 'public/js');

    //mix.phpUnit();//.phpSpec();
});
