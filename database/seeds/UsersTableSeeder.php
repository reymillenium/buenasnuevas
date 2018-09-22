<?php
    
    use BuenasNuevas\Country;
    use BuenasNuevas\User;
    use Illuminate\Database\Seeder;
    
    class UsersTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            // Obtenemos el user_profession_id directamente con Eloquent ORM
            // $profession_id = Profession::where('name', 'Senior Back-end Developer')->value('id');
            
            // Obtenemos el country_id directamente con Eloquent ORM
            $country_id = Country::where('name', 'Cuba')->value('id');
            
            // Usando Eloquent ORM. Muchísimo más sencillo aun!!! Usamos el Modelo User y llamamos a la
            // función create, pasándole un array asociativo con los datos que queremos insertar
            // Usuario especial # 1
            User::create([
    
                // 'profession_id' => $profession_id,
                'country_id' => $country_id,
                
                'first_name' => 'Reinier',
                'second_name' => '',
                'last_name' => 'Garcia Ramos',
                
                'email' => 'reymillenium@gmail.com',
                'password' => bcrypt('123456'),
                
                'phone' => '7864582150',
                'gender' => 'male',
                // 'is_active' => '1',
                'kind' => 'administrator'
            ]);
            
            // Creamos el usuario especial # 2
            User::create([
                
                // 'profession_id' => 3,
                'country_id' => $country_id,
                
                'first_name' => 'Pedro',
                'second_name' => 'Picapiedras',
                'last_name' => 'Roca Dura',
                
                'email' => 'pedrito@gmail.com',
                'password' => bcrypt('123456'),
                
                'phone' => '2222222222',
                'gender' => 'male',
                // 'is_active' => '1',
                'kind' => 'guest'
            ]);
            
            // Obtenemos la cantidad de profesiones que existen en la BD con Eloquent ORM
            // $professionsAmount = Profession::count();
            
            
            // Creamos 100 usuarios aleatorios usando Model Factories
            // factory(User::class)->times(100)->create();
            factory(User::class, 100)->create();
        }
    }
