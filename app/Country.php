<?php
    
    namespace BuenasNuevas;
    
    // Definimos las clases en uso luego del nombre de espacio
    use Illuminate\Database\Eloquent\Model;
    
    class Country extends Model
    {
    
        // Reescribimos la propiedad table, por si queremos definir un nombre de tabla diferente para el modelo.
        protected $table = 'countries';
        
        // Para especificar que no quiero usar el timestamp (campos created_at y updated_at) en mi tabla
        // public $timestamps = false;
        
        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [
            'code',
            'name'
        ];
        
        public function users()
        {
            // Especifico que un Country tiene muchos Users
            return $this->hasMany(User::class, 'country_id', 'id');
        }
        
    }
