<?php
    
    namespace BuenasNuevas\Http\Controllers;
    
    use BuenasNuevas\User;
    use Illuminate\Http\Request;
    
    class UserController extends Controller
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
        
        public function show_user_page($language)
        {
            // return view('user.user_page');
            return view('user.user_page', compact('language'));
        }
        
        public function show_videos_page($language)
        {
            // return view('videos_page');
            return view('videos_page', compact('language'));
        }
        
        
        public function show_pictures_page($language)
        {
            // return view('pictures_page');
            return view('pictures_page', compact('language'));
        }
        
        
        public function show_contact_page($language)
        {
            // return view('contact_page');
            return view('contact_page', compact('language'));
        }
        
        
    }
