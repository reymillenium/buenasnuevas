<?php
    
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;
    
    class DatabaseSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            // dd(ProfessionsTableSeeder::class);
            // dd("ProfessionsTableSeeder");
            // dd("CountriesTableSeeder");
            
            // Elimino el contenido de las tablas antes de insertar los datos nuevamente en ellas
            $this->truncateTables([
                'users'
                // , 'professions'
                , 'countries'
            ]);
            
            // Ejecuto 1ro el seeder ProfessionsTableSeeder
            // $this->call(ProfessionsTableSeeder::class);
            //
            // Ejecuto 1ro el seeder CountriesTableSeeder
            $this->call(CountriesTableSeeder::class);
            
            // Ejecuto el seeder UsersTableSeeder
            $this->call(UsersTableSeeder::class);
            
        }
        
        
        protected function truncateTables(array $tables)
        {
            // Desactivo la revisión de las llaves foráneas en la BD (permite borrar valores de un campo que sea llave foránea en otra tabla)
            DB::statement('SET FOREIGN_KEY_CHECKS = 0');
            
            foreach ($tables as $table) {
                # Elimino todas las profesiones de la BD antes de crearlas nuevamente (vaciar la tabla sin eliminarla)
                // Normalmente no funcionaría si la tabla posee un campo que es una llave foránea en otra tabla (profession_id con user_profession_id en la tabla users)
                // ** Para eso justamente es que antes se desactiva la revisión de las llaves foráneas en la BD
                DB::table($table)->truncate();
            }
            
            //Activo nuevamente la revisión de las llaves foráneas en la BD
            DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        }
    }
