const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
<<<<<<< HEAD
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
=======
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
>>>>>>> 5b5c86165c6c86e88b1d647a34fae95ec78f4132
    mix.sass('app.scss')
       .webpack('app.js');
});
