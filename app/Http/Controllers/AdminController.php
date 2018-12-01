<?php
    
    namespace BuenasNuevas\Http\Controllers;
    
    use BuenasNuevas\User;
    use Illuminate\Http\Request;
    
    class AdminController extends Controller
    {
        /**
         * Create a new controller instance.
         *
         * @return void
         */
        public function __construct()
        {
            $this->middleware('auth');
        }
        
        
        public function show_users_page($language)
        {
            
            $users = User::all();
            
            // Usando el método compact que va a convertir el nombre de las variables locales en un array asociativo
            // return view('users.users_page', compact('users', 'title'));
            return view('user.users_page', compact('language', 'users'));
        }
        
        public function show_user_details_page($language, User $user)
        {
            // Usando el método compact que va a convertir el nombre de las variables locales en un array asociativo
            return view('user.user_details_page', compact('language', 'user'));
        }
        
        
    }
