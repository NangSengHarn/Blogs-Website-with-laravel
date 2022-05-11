<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $james=User::factory()->create(['name'=>'James Poole','username'=>'james']);
        $miya=User::factory()->create(['name'=>'Miya Rosette','username'=>'miya']);

        $lifestyle=Tag::factory()->create(['name'=>'lifestyle','slug'=>'lifestyle']);
        $food=Tag::factory()->create(['name'=>'food','slug'=>'food']);

        $workouts=Category::factory()->create(['name'=>'workouts','slug'=>'workouts']);
        $recipes=Category::factory()->create(['name'=>'recipes','slug'=>'recipes']);

        Blog::factory(2)->create(['user_id'=>$james->id,'category_id'=>$workouts->id]);
        Blog::factory(3)->create(['user_id'=>$miya->id,'category_id'=>$recipes->id]);

        Comment::factory(2)->create(['blog_id'=>1,'user_id'=>$miya->id]);
        Comment::factory(2)->create(['blog_id'=>3,'user_id'=>$james->id]);
    }
}
