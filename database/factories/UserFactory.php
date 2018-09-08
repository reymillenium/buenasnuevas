<?php
    
    use Faker\Generator as Faker;
    
    /*
    |--------------------------------------------------------------------------
    | Model Factories
    |--------------------------------------------------------------------------
    |
    | This directory should contain each of the model factory definitions for
    | your application. Factories provide a convenient way to generate new
    | model instances for testing / seeding your application's database.
    |
    */
    
    $factory->define(BuenasNuevas\User::class, function (Faker $faker) {
        
        $kinds = ['administrator', 'operator', 'guest'];
        $gender = $faker->randomElements(['male', 'female'])[0];
        // $professions_amount = Profession::count();
        
        // dd($gender[0]);
        
        return [
            // 'profession_id' => rand(1, $professions_amount),
            'first_name' => $faker->firstName($gender),
            'second_name' => $faker->name,
            'last_name' => $faker->lastName,
            
            'email' => $faker->unique()->safeEmail,
            'password' => bcrypt('123456'),
            
            'remember_token' => str_random(10),
            'phone' => $faker->phoneNumber,
            'gender' => $gender,
            // 'is_active' => 1,
            'kind' => $kinds[rand(0, sizeof($kinds) - 1)],
            // 'website' => $faker->url,
        ];
        
    });
