<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use \App\Http\Controllers\WelcomeController;
//
//class a
//{
//
//    /**
//     * @var Store
//     */
//    private $session;
//
//    public function __construct(Store $session)
//    {
//
//        $this->session = $session;
//
//    }
//}
//
Route::get('/', 'WelcomeController@index');

Route::get('contact', 'PagesController@contact');
Route::get('about', 'PagesController@about');
//Route::get('third', 'PagesController@third');
//Route::get('fourth', 'PagesController@fourth');
//Route::get('fifth', 'PagesController@fifth');
//
//Route::get('sixth', 'PagesController@sixth');
//
//
Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',   //http://localhost:8000/auth/register or http://localhost:8000/auth/foo
    'password' => 'Auth\PasswordController',
]);


//Route::get('api', function(){
//    return 'welcome to our api!';
//});

//Route::get('articles', 'ArticlesController@index');
//Route::get('articles/create', 'ArticlesController@create');
//Route::get('articles/{id}', 'ArticlesController@show');
//Route::post('articles','ArticlesController@store');

Route::resource('articles','ArticlesController');