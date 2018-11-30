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
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Route;
    
    # ** Rutas del invitado anónimo **
    
    
    // Personalizo la página de logout, lanzando un error 404 y así evito el que muestre info crítica del sistema
    Route::get('/logout', function () {
        // return view('auth.login');
        abort(404);
    });
    
    // Defino la página de inicio por default
    Route::get('/', 'GuestController@show_default_page')->name('default_page');
    
    Route::get('/home', 'GuestController@show_home_page')->name('home');
    
    // Muestra la página de inicio
    // Route::get('/index_page/{language}', 'GuestController@show_index_page')->name('index_page');
    Route::get('{language}/index_page', 'GuestController@show_index_page')->name('index_page');
    
    // Muestra la página de Nuestra Misión
    // Route::get('/our_mission_page/{language}', 'GuestController@show_our_mission_page')->name('our_mission_page');
    Route::get('{language}/our_mission_page', 'GuestController@show_our_mission_page')->name('our_mission_page');
    
    // Muestra la página de Actividades
    // Route::get('/activities_page/{language}', 'GuestController@show_activities_page')->name('activities_page');
    Route::get('{language}/activities_page', 'GuestController@show_activities_page')->name('activities_page');
    
    // Muestra la página de Ministerios
    // Route::get('/ministries_page/{language}', 'GuestController@show_ministries_page')->name('ministries_page');
    Route::get('{language}/ministries_page', 'GuestController@show_ministries_page')->name('ministries_page');
    
    // Muestra la página de Estudio
    // Route::get('/study_page/{language}', 'GuestController@show_study_page')->name('study_page');
    Route::get('{language}/study_page', 'GuestController@show_study_page')->name('study_page');
    
    
    # ** Rutas del Usuario autenticado **
    
    
    // ** Rutas de autenticación **
    Auth::routes();
    
    // Reescribimos la ruta get de register. Los ponemos después de las rutas Auth originales
    Route::get('{language}/register_page', 'GuestController@show_register_page')->name('register_page');
    Route::get('{language}/login_page', 'GuestController@show_login_page')->name('login_page');
    Route::get('login', 'GuestController@login')->name('login');
    
    // Muestra la página personal con los datos del usuario que se ha autenticado
    // Route::get('/user_page', 'UserController@show_user_page')->name('user.user_page');
    Route::get('{language}/user_page', 'UserController@show_user_page')->name('user_page');
    
    // Muestra la página de Videos
    // Route::get('/videos_page', 'UserController@show_videos_page')->name('videos_page');
    Route::get('{language}/videos_page', 'UserController@show_videos_page')->name('videos_page');
    
    // Muestra la página de Fotos
    // Route::get('/pictures_page', 'UserController@show_pictures_page')->name('pictures_page');
    Route::get('{language}/pictures_page', 'UserController@show_pictures_page')->name('pictures_page');
    
    // Muestra la página de Contacto
    // Route::get('/contact_page', 'UserController@show_contact_page')->name('contact_page');
    Route::get('{language}/contact_page', 'UserController@show_contact_page')->name('contact_page');
    
    // Recibe los datos del formulario de nuevo Message, para validarlos y luego almacenarlos en la BD
    Route::post('/create_message_script', 'MessageController@goto_create_message_script')->name('create_message_script');
    
    
    # ** Rutas del Administrador autenticado **
    
    
    // Muestra la página con parte de los datos de los usuarios del sistema:
    Route::get('{language}/users_page', 'AdminController@show_users_page')->name('user.users_page');
    
    # Muestra la página con los detalles de un User en específico, dado su ID
    Route::get('{language}/user_details_page/{user}', 'AdminController@show_user_details_page')->where('user', '[0-9]+')->name('user.user_details_page');
    
    # Muestra la página con el formulario para la actualización de un User, dado su ID
    Route::get('{language}/edit_user_page/{user}', 'AdminController@show_edit_user_page')->name('user.edit_user_page');
