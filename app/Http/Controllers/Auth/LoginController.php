<?php
    
    namespace BuenasNuevas\Http\Controllers\Auth;
    
    use BuenasNuevas\Http\Controllers\Controller;
    use Illuminate\Foundation\Auth\AuthenticatesUsers;
    
    // Importante para que el redireccionamiento post-logout funcione
    use Illuminate\Http\Request;
    
    class LoginController extends Controller
    {
        /*
        |--------------------------------------------------------------------------
        | Login Controller
        |--------------------------------------------------------------------------
        |
        | This controller handles authenticating users for the application and
        | redirecting them to your home screen. The controller uses a trait
        | to conveniently provide its functionality to your applications.
        |
        */
        
        use AuthenticatesUsers;
        
        /**
         * Where to redirect users after login.
         *
         * @var string
         */
        protected $redirectTo = '/';
        
        /**
         * Create a new controller instance.
         *
         * @return void
         */
        public function __construct()
        {
            $this->middleware('guest')->except('logout');
        }
        
        
        /**
         * Log the user out of the application.
         * Redefines the
         *
         * @param \Illuminate\Http\Request $request
         * @return \Illuminate\Http\Response
         */
        public function logout(Request $request)
        {
            $this->guard()->logout();
            $request->session()->flush();
            $request->session()->regenerate();
            // return redirect('login_page', ['language' => 'es']);
            // return redirect('login_page');
            
            // Así estaba al inicio
            // return redirect('login');
            
            return redirect('es/' . 'login_page');
        }
        
    }
