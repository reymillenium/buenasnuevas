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
    
    # ** Rutas del invitado anónimo **
    

    // Personalizo la página de logout, enviando al inicio de vuelta al login (no lo uso ahora)
    // Route::get('/logout', function () {
    //     return view('auth.login');
    // });
    
    // Defino la página de inicio
    Route::get('/', 'GuestController@show_index_page')->name('index_page');
    
    Route::get('/home', 'GuestController@show_home_page')->name('home');
    
    // Muestra la página de inicio
    Route::get('/index_page', 'GuestController@show_index_page')->name('index_page');
    
    // Muestra la página de Nuestra Misión
    Route::get('/our_mission_page', 'GuestController@show_our_mission_page')->name('our_mission_page');
    
    // Muestra la página de Actividades
    Route::get('/activities_page', 'GuestController@show_activities_page')->name('activities_page');
    
    // Muestra la página de Ministerios
    Route::get('/ministries_page', 'GuestController@show_ministries_page')->name('ministries_page');
    
    // Muestra la página de Estudio
    Route::get('/study_page', 'GuestController@show_study_page')->name('study_page');
    
    
    # ** Rutas del Usuario autenticado **
    
    // Rutas de autenticación
    Auth::routes();
    
    // Muestra la página con los datos del usuario autenticado
    Route::get('/user_page', 'UserController@show_user_page')->name('user.user_page');
    
    // Muestra la página de Videos
    Route::get('/videos_page', 'UserController@show_videos_page')->name('videos_page');
    
    // Muestra la página de Fotos
    Route::get('/pictures_page', 'UserController@show_pictures_page')->name('pictures_page');
    
    // Muestra la página de Contacto
    Route::get('/contact_page', 'UserController@show_contact_page')->name('contact_page');
    
    # ** Rutas del Administrador autenticado **

