<?php
    
    namespace BuenasNuevas;
    
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
        
        public function country()
        {
            // Especifico que un User pertenece a una Profession
            // return $this->belongsTo(Profession::class, 'profession_id');
            // Especifico que un User pertenece a un Country
            return $this->belongsTo(Country::class, 'country_id', 'id');
        }
        
        
    }
