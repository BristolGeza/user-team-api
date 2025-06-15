<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_create_user() {
       $response = $this->postJson('/api/users', [
         'name' => 'Test User',
         'email' => 'test@example.com'
        ]);

       $response->assertStatus(201)
             ->assertJsonStructure(['id', 'name', 'email']);
}

}
