<?php
    
    namespace BuenasNuevas;
    
    use Illuminate\Database\Eloquent\Model;
    
    class Message extends Model
    {
        
        // Reescribimos la propiedad table, por si queremos definir un nombre de tabla diferente para el modelo.
        protected $table = 'messages';
        
        // Para especificar que no quiero usar el timestamp (campos created_at y updated_at) en mi tabla
        // public $timestamps = false;
        
        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [
            'user_id',
            'subject',
            'body'
        ];
        
        public function user()
        {
            // Especifico que un Message pertenece a un User
            return $this->belongsTo(User::class, 'user_id', 'id');
        }
        
        
    }
