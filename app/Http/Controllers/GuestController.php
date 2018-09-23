<?php
    
    namespace BuenasNuevas\Http\Controllers;
    
    use Illuminate\Http\Request;
    
    class GuestController extends Controller
    {
        /**
         * Create a new controller instance.
         *
         * @return void
         */
        public function __construct()
        {
            // $this->middleware('auth');
        }
        
        /**
         * Show the application dashboard.
         *
         * @return \Illuminate\Http\Response
         */
        public function show_home_page()
        {
            return view('home');
        }
        
        /**
         * Shows the index page as the default page.
         *
         * @return \Illuminate\Http\Response
         */
        public function show_default_page()
        {
            // return view('index_page');
            // $language = 'es';
            // return view('index_page', compact('language'));
            return redirect(route('index_page', ['language' => 'es']));
            
        }
        
        
        /**
         * Shows the index page.
         *
         * @return \Illuminate\Http\Response
         */
        public function show_index_page($language)
        {
            // return view('index_page');
            return view('index_page', compact('language'));
        }
        
        
        public function show_our_mission_page($language)
        {
            // return view('our_mission_page');
            return view('our_mission_page', compact('language'));
        }
        
        
        public function show_activities_page($language)
        {
            // return view('activities_page');
            return view('activities_page', compact('language'));
        }
        
        
        public function show_ministries_page($language)
        {
            // return view('ministries_page');
            return view('ministries_page', compact('language'));
        }
        
        
        public function show_study_page($language)
        {
            // return view('study_page');
            return view('study_page', compact('language'));
        }
        
        public function show_register_page($language)
        {
            // return view('register');
            return view('auth.register', compact('language'));
        }
        
        public function show_login_page($language)
        {
            // return view('register');
            return view('auth.login', compact('language'));
        }
        
        public function login()
        {
            // return view('register');
            // $language = 'en';
            // return view('auth.login', compact('language'));
            return redirect(route('login_page', ['language' => 'en']));
        }
        
        
    }
