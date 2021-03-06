<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
						$table->string('title');
						$table->string('description');
						$table->string('slug');
						$table->text('body');
						$table->string('credits');
						$table->bigInteger('pluses');
						$table->enum('level', ['Beginner', 'Elementary', 'Intermedient', 'Upper Intermedient']);
						$table->enum('language', ['Turkish', 'Arabic', 'Bashkir', 'English']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
