<?php
    
    namespace BuenasNuevas\Http\Controllers\Auth;
    
    use BuenasNuevas\User;
    use BuenasNuevas\Http\Controllers\Controller;
    use Illuminate\Support\Facades\Validator;
    
    use Illuminate\Foundation\Auth\RegistersUsers;

    class RegisterController extends Controller
    {
        /*
        |--------------------------------------------------------------------------
        | Register Controller
        |--------------------------------------------------------------------------
        |
        | This controller handles the registration of new users as well as their
        | validation and creation. By default this controller uses a trait to
        | provide this functionality without requiring any additional code.
        |
        */
        
        use RegistersUsers;
        
        /**
         * Where to redirect users after registration.
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
            $this->middleware('guest');
        }
        
        /**
         * Get a validator for an incoming registration request.
         *
         * @param  array $data
         * @return \Illuminate\Contracts\Validation\Validator
         */
        protected function validator(array $data)
        {
            
            # Lo que venía programado por default:
            // return Validator::make($data, [
            //     'first_name' => 'required|string|max:255',
            //     'last_name' => 'required|string|max:255',
            //
            //     'phone' => 'required|string|max:255|unique:users',
            //     'gender' => 'required|string|max:255',
            //
            //     'email' => 'required|string|email|max:255|unique:users',
            //     'password' => 'required|string|min:6|confirmed',
            // ]);
            
            // Especifico algunas variables para valores mínimos y máximos de los campos
            $firstnameMaxLenght = 48;
            $secondnameMaxLenght = 48;
            $lastnameMaxLenght = 64;
            
            $phoneMinLenght = 6;
            $phoneMaxLenght = 21;
            
            $emailMaxLenght = 48;
            
            $passwordMinLenght = 6;
            $passwordMaxLenght = 255;
            
            
            // Especifico las expresiones regulares:
            // $letters_with_accents_and_spaces = "/^[\pL\s]+$/u";
            $letters_with_accents_dashes_and_spaces = "/^[\s-'\pL]+$/u";
            
            // Especifico las reglas de validación
            $rules = array(
                'first_name' => ['required', 'regex:' . $letters_with_accents_dashes_and_spaces, "max:$firstnameMaxLenght"],
                'second_name' => ['nullable', 'regex:' . $letters_with_accents_dashes_and_spaces, "max:$secondnameMaxLenght"],
                'last_name' => ['required', 'regex:' . $letters_with_accents_dashes_and_spaces, "max:$lastnameMaxLenght"],
                
                'phone' => ['required', 'numeric', 'unique:users,phone', "digits_between:$phoneMinLenght,$phoneMaxLenght"],
                'gender' => ['required', 'in:male,female'],
                
                'email' => ['required', 'email', 'unique:users,email', "max:$emailMaxLenght"],
                'password' => ['required', "min:$passwordMinLenght", "max:$passwordMaxLenght"],
                'password_confirmation' => ['required', 'same:password']
            
            );
            
            // Especifico mensajes de error a la medida, para los campos de validación
            $errors = array(
                // Debo concatenar con un punto el campo con el nombre de la regla en cuestión
                'first_name.required' => 'Debe teclear su nombre',
                'first_name.regex' => 'El nombre solo puede estar conformado por letras, tildes, espacios y guiones',
                'first_name.max' => 'El nombre solo puede tener hasta ' . $firstnameMaxLenght . ' caracteres',
                
                'second_name.regex' => 'El segundo nombre solo puede estar conformado por letras, tildes, espacios y guiones',
                'second_name.max' => 'El segundo nombre solo puede tener hasta ' . $secondnameMaxLenght . ' caracteres',
                
                'last_name.required' => 'Debe teclear sus apellidos',
                'last_name.regex' => 'Los apellidos solo pueden estar conformados por letras, tildes, espacios y guiones',
                'last_name.max' => 'Los apellidos solo pueden tener hasta ' . $lastnameMaxLenght . ' caracteres',
                
                'phone.required' => 'Debe teclear su teléfono',
                'phone.numeric' => 'El teléfono solo puede estar formado por números',
                'phone.unique' => 'El teléfono tecleado ya está en uso. Use otro por favor',
                'phone.digits_between' => 'El teléfono debe poseer de ' . $phoneMinLenght . ' a ' . $phoneMaxLenght . ' dígitos',
                
                'gender.required' => 'Debe escoger su sexo (género)',
                'gender.in' => 'El sexo (género) solo puede ser masculino o femenino',
                
                'email.required' => 'Debe teclear su email',
                'email.email' => 'El email debe poseer un formato adecuado. Del tipo: email_example@domain.com',
                'email.unique' => 'El email tecleado ya está en uso. Use otro por favor',
                'email.max' => 'El email solo puede tener hasta ' . $emailMaxLenght . ' caracteres',
                
                'password.required' => 'Debe teclear su contraseña',
                'password.min' => 'El password debe poseer un mínimo de ' . $passwordMinLenght . ' caracteres',
                'password.max' => 'El password solo puede tener hasta ' . $passwordMaxLenght . ' caracteres',
                
                'password_confirmation.required' => 'Debe confirmar su contraseña',
                'password_confirmation.same' => 'Las contraseñas deben coincidir',
                
                // 'kind.required' => 'Debe escoger sus privilegios en el sistema',
                
                // 'profession_id.required' => 'Debe escoger su profesión',
            );
            
            // Realizo la validación, pasando los datos recibidos por post ($postData), las reglas ($rules) y los mensajes de error ($errors)
            return Validator::make($data, $rules, $errors);
            
            // Realizo la validación, pasando los datos recibidos por post ($postData), las reglas ($rules) y los mensajes de error ($errors)
            // $validator = Validator::make($data, $rules, $errors);
            //
            // if ($validator->fails()) {
            //     return redirect(route('register'))
            //         ->withErrors($validator)
            //         ->withInput();
            // }
            
            
        }
        
        /**
         * Create a new user instance after a valid registration.
         *
         * @param  array $data
         * @return \BuenasNuevas\User
         */
        protected function create(array $data)
        {
            return User::create([
                'first_name' => $data['first_name'],
                'second_name' => $data['second_name'],
                'last_name' => $data['last_name'],
                'phone' => $data['phone'],
                'gender' => $data['gender'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
            ]);
        }
    }
