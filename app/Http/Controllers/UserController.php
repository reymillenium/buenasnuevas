<?php
    
    namespace BuenasNuevas\Http\Controllers;
    
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
        
        public function show_user_page()
        {
            return view('user.user_page');
        }
        
        public function show_videos_page()
        {
            return view('videos_page');
        }
        
        
        public function show_pictures_page()
        {
            return view('pictures_page');
        }
        
        
        public function show_contact_page()
        {
            return view('contact_page');
        }
        
        
    }
