<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use Tests\TestCase;

class RouteTest extends TestCase
{
   public function testTeachingHomepage()
   {
       $homeroute = $this->get('/teaching');

       $homeroute -> assertStatus(200);
   }

   public function testWrongTeachingHompage()
   {
    $homeroute = $this->get('/teachere');

    $homeroute -> assertStatus(404);
   }

   public function test_http_request()
   {
       $response=$this->withHeaders([
           'Header' => 'Value'
       ])->post('/profiles',['name' => 'Pratyusha Mothadaka']);

       $response->assertStatus(404);
   }
   public function test_an_action_that_requires_authentication()
   {
       $user = User::factory()->create();

       $response = $this->actingAs($user)
                        ->withSession(['banned' => false])
                        ->get('/');
        $response->assertStatus(200);
   }


}
