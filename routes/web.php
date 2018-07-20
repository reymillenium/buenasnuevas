<?php
    
    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */
    
    use BuenasNuevas\User;
    use Illuminate\Support\Facades\Route;
    
    
    Route::get('/', function () {
        return view('welcome');
    });
    
    // Rutas de autenticación
    Auth::routes();
    
    Route::get('/home', 'HomeController@show_home_page')->name('home');
    
    // Muestra la página de inicio
    Route::get('/index_page', 'HomeController@show_index_page')->name('index_page');
    
    // Muestra la página de Nuestra Misión
    Route::get('/our_mission_page', 'HomeController@show_our_mission_page')->name('our_mission_page');
    
    // Muestra la página de Actividades
    Route::get('/activities_page', 'HomeController@show_activities_page')->name('activities_page');
    
    // Muestra la página de Ministerios
    Route::get('/ministries_page', 'HomeController@show_ministries_page')->name('ministries_page');
    
    // Muestra la página de Estudio
    Route::get('/study_page', 'HomeController@show_study_page')->name('study_page');
    
    // Muestra la página de Videos
    Route::get('/videos_page', 'HomeController@show_videos_page')->name('videos_page');
    
    // Muestra la página de Fotos
    Route::get('/pictures_page', 'HomeController@show_pictures_page')->name('pictures_page');
    
    // Muestra la página de Contacto
    Route::get('/contact_page', 'HomeController@show_contact_page')->name('contact_page');
