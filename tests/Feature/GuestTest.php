<?php
    
    namespace Tests\Feature;
    
    use BuenasNuevas\User;
    use Illuminate\Foundation\Testing\DatabaseMigrations;
    use Tests\TestCase;
    use Illuminate\Foundation\Testing\RefreshDatabase;
    
    class GuestTest extends TestCase
    {
        // Este trate antes de ejecutar las pruebas migra los datos hacia la BD de pruebas y ejecuta cada prueba dentro de una transacción de la BD
        // No funciona este trait con los tests: "it_displays_the_user_details_page" y "it_creates_a_new_user"
        use RefreshDatabase;
        
        // Este funciona, pero es más lento
        // use DatabaseMigrations;
        
        /**
         * Comprueba si luego de la llamada a la ruta raíz se redirige hacia la default page.
         *
         * @test
         */
        public function it_redirect_to_default_page()
        {
            $response = $this->get('/');
            
            $response->assertStatus(302);
        }
        
        /**
         * Comprueba si se muestra index_page.
         *
         * @test
         */
        public function it_displays_the_index_page()
        {
            $response = $this->get('es/index_page');
            $response->assertStatus(200)
                ->assertSee("Una comunidad unida, en la búsqueda del señor");
            
            $response = $this->get('en/index_page');
            $response->assertStatus(200)
                ->assertSee("A united community, in the search for the Lord");
            
            $response = $this->get('fr/index_page');
            $response->assertStatus(200)
                ->assertSee("Une communauté unie à la recherche du Seigneur");
        }
        
        /**
         * Comprueba si se muestra our_mission_page.
         *
         * @test
         */
        public function it_displays_the_our_mission_page()
        {
            $response = $this->get('es/our_mission_page');
            $response->assertStatus(200)
                ->assertSee("Nuestra Misión");
            
            
            $response = $this->get('en/our_mission_page');
            $response->assertStatus(200)
                ->assertSee("Our Mission");
            
            $response = $this->get('fr/our_mission_page');
            $response->assertStatus(200)
                ->assertSee("Notre Mission");
        }
        
        /**
         * Comprueba si se muestra activities_page.
         *
         * @test
         */
        public function it_displays_the_activities_page()
        {
            $response = $this->get('es/activities_page');
            $response->assertStatus(200)
                ->assertSee("ACTIVIDADES");
            
            
            $response = $this->get('en/activities_page');
            $response->assertStatus(200)
                ->assertSee("ACTIVITIES");
            
            $response = $this->get('fr/activities_page');
            $response->assertStatus(200)
                ->assertSee("ACTIVITES");
        }
        
        /**
         * Comprueba si se muestra ministries_page.
         *
         * @test
         */
        public function it_displays_the_ministries_page()
        {
            $response = $this->get('es/ministries_page');
            $response->assertStatus(200)
                ->assertSee("Ministerios");
            
            
            $response = $this->get('en/ministries_page');
            $response->assertStatus(200)
                ->assertSee("Ministeries");
            
            $response = $this->get('fr/ministries_page');
            $response->assertStatus(200)
                ->assertSee("Ministères");
        }
        
        /**
         * Comprueba si se muestra study_page.
         *
         * @test
         */
        public function it_displays_the_study_page()
        {
            $response = $this->get('es/study_page');
            $response->assertStatus(200)
                ->assertSee("Estudio");
            
            
            $response = $this->get('en/study_page');
            $response->assertStatus(200)
                ->assertSee("Study");
            
            $response = $this->get('fr/study_page');
            $response->assertStatus(200)
                ->assertSee("Studio");
        }
        
        /**
         * Comprueba si se muestra users_page.
         *
         * @test
         */
        public function it_displays_the_users_page()
        {
            $user = factory(User::class)->make();
            
            $response = $this->actingAs($user)->get('es/users_page');
            $response->assertStatus(200)
                ->assertSee("Usuarios");
            
            $response = $this->actingAs($user)->get('en/users_page');
            $response->assertStatus(200)
                ->assertSee("Users");
            
            $response = $this->actingAs($user)->get('fr/users_page');
            $response->assertStatus(200)
                ->assertSee("Utilisateurs");
        }
        
        
    }
