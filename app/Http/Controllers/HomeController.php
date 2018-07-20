<?php
    
    namespace BuenasNuevas\Http\Controllers;
    
    use Illuminate\Http\Request;
    
    class HomeController extends Controller
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
         * Shows the index page.
         *
         * @return \Illuminate\Http\Response
         */
        public function show_index_page()
        {
            return view('index_page');
        }
        
        
        public function show_our_mission_page()
        {
            return view('our_mission_page');
        }
        
        
        public function show_activities_page()
        {
            return view('activities_page');
        }
        
        
        public function show_ministries_page()
        {
            return view('ministries_page');
        }
        
        
        public function show_study_page()
        {
            return view('study_page');
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
