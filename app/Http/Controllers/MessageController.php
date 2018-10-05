<?php
    
    namespace BuenasNuevas\Http\Controllers;
    
    use BuenasNuevas\Message;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Redirect;
    use Illuminate\Support\Facades\Validator;
    
    class MessageController extends Controller
    {
        
        // Crea un nuevo User
        public function goto_create_message_script()
        {
            // Recibo por POST todos los datos del Message a la vez y los guardo en un array
            // $messageData = Input::all();
            $messageData = request()->all();
            
            // Especifico algunas variables para valores mínimos y máximos de los campos
            $subjectMinLenght = 3;
            $subjectMaxLenght = 255;
            
            $bodyMinLenght = 3;
            // $bodyMaxLenght = 65535;
            $bodyMaxLenght = 1000;
            
            
            // Especifico las reglas de validación
            $rules = array(
                'subject' => ['required', "min:$subjectMinLenght", "max:$subjectMaxLenght"],
                'body' => ['required', "min:$subjectMinLenght"]
            );
            
            // Especifico mensajes de error a la medida, para los campos de validación
            $errors = array(
                // * Debo concatenar con un punto el campo con el nombre de la regla en cuestión
                'subject.required' => 'Debe teclear el asunto',
                'subject.min' => 'El asunto debe poseer un mínimo de ' . $subjectMinLenght . ' caracteres',
                'subject.max' => 'El asunto solo puede tener hasta ' . $subjectMaxLenght . ' caracteres',
                
                'body.required' => 'Debe teclear el cuerpo del mensaje',
                'body.min' => 'El cuerpo del mensaje debe poseer un mínimo de ' . $bodyMinLenght . ' caracteres',
                'body.max' => 'El cuerpo del mensaje solo puede tener hasta ' . $bodyMaxLenght . ' caracteres',
            );
            
            // Realizo la validación, pasando los datos recibidos por post ($messageData), las reglas ($rules) y los mensajes de error ($errors)
            $validator = Validator::make($messageData, $rules, $errors);
            
            // Ahora verifico el éxito o no de la validación
            if ($validator->fails()) // Si la validación falla...
            {
                // Redirecciono nuevamente hacia la página con el formulario de nuevo message (la ruta: contact_page) enviando los datos recibidos y los mensajes de error ($errors)
                return redirect::to(route('contact_page', ['language' => $messageData['language']]))->withInput()->withErrors($validator);
                
            } else // En cambio, si la validación es exitosa...
            {
                // Introduzco los datos recibidos en la BD
                Message::create([
                    'user_id' => $messageData['user_id'],
                    'subject' => $messageData['subject'],
                    'body' => $messageData['body']
                ]);
                
                // send back to the page with success message
                // GlobalHelper::setMessage('Registration data saved.', 'success');
                // return Redirect::to('register');
                
                // Redirecciono hacia la página de inicio (index_page)
                // return redirect()->route('index_page')->with('language', 'es');
                return redirect()->route('index_page', ['language' => $messageData['language']]);
            }
            
            
        }
        
    }
