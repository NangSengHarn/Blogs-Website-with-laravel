<?php

namespace Database\Factories;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'blog_id'=>Blog::factory(),
            'user_id'=>User::factory(),
            'body'=>$this->faker->paragraph()
        ];
    }
}
