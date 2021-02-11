<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Post;
use App\Models\Comment;

class PostsTest extends TestCase
{
    use WithFaker, RefreshDatabase;


    /** @test */
    public function a_user_can_see_posts_list ()
    {
			$this->withoutExceptionHandling();

			$post = Post::factory()->create();
			$this->get('/posts' )->
				 assertSee($post['title'])->
				 assertSee($post['language'])->
				 assertSee($post['level'])->
				 assertSee($post['description']);
    } 

    /** @test */
		public function can_leave_a_comment()
		{
			$this->withoutExceptionHandling();

			$post = Post::factory()->create();
			$comment = [ 
				'id' => $this->faker->numberBetween(1,62),
				'name' => $this->faker->name,
				'message' => $this->faker->sentence,
				'level' => $this->faker->paragraph,
				'post_id' => $post->id,
				'slug' => $this->faker->slug
			];

			$this->post('/posts/comments', $comment);   
			$this->assertDatabaseHas('comments',$comment);   

			$this->get('/posts/' . $post->id )->assertSee($post->comments()->name)->assertSee($post->comments()->message);

		}

		/** @test */
		public function a_post_requires_title()
		{
			$this->withoutExceptionHandling();
		}
	 
}
