<?php
    
    namespace BuenasNuevas;
    
    // Definimos las clases en uso luego del nombre de espacio
    use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    
    class User extends Authenticatable
    {
        use Notifiable;
        
        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [
            'first_name',
            'second_name',
            'last_name',
            
            'phone',
            'gender',
            'country_id',
            
            'email',
            'password',
        
        ];
        
        /**
         * The attributes that should be hidden for arrays.
         *
         * @var array
         */
        protected $hidden = [
            'password', 'remember_token',
        ];
        
        // public function profession()
        // {
        //     // Especifico que un User pertenece a una Profession
        //     return $this->belongsTo(Profession::class, 'profession_id');
        //
        // }
        
        public function isAdmin()
        {
            // Devuelvo si es administrador o no (false or true)
            return ($this->email == 'reymillenium@gmail.com' || $this->kind == 'administrator');
        }
        
        protected static function findByEmail($email)
        {
            // return User::where(compact('email'))->first();
            return static::where(compact('email'))->first();
        }
        
        
        public function country()
        {
            // Especifico que un User pertenece a un Country
            return $this->belongsTo(Country::class, 'country_id', 'id');
    
            // En caso de que se sigan las convenciones para la nomenclatura de los campos, se podría expresar de esta forma
            // return $this->belongsTo(Country::class);
        }
        
        
        public function messages()
        {
            // Especifico que un User tiene muchos Messages
            return $this->hasMany(Message::class, 'user_id', 'id');
            
            // En caso de que se sigan las convenciones para la nomenclatura de los campos, se podría expresar de esta forma
            // return $this->hasMany(Message::class);
        }
        
    }
