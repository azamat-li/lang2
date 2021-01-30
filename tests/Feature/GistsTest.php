<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GistsTest extends TestCase
{
    use WithFaker, RefreshDatabase;


    /** @test */
    public function a_user_can_create_a_gist()
    {
	$this->withoutExceptionHandling();
	$attributes = [
	  'title' => $this->faker->name,
	  'description' => $this->faker->sentence,
	  'body' => $this->faker->paragraph,
          'slug' => $this->faker->slug
	];

	$this->post('/gists', $attributes);   

	$this->assertDatabaseHas('gists',$attributes);   

 	$this->get('/gists')->assertSee($attributes['title']);
 	$this->get('/gists')->assertSee($attributes['description']);
    } 
 
}
