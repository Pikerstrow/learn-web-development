<?php

use App\Comment;
use App\Course;
use App\Lesson;
use App\Section;
use App\Subscriber;
use App\User;
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
        factory(Course::class, 6)->create();
        factory(Section::class, 30)->create();
        factory(Lesson::class, 158)->create();
        factory(Comment::class, 40)->create();
        factory(Subscriber::class, 67)->create();

    }
}
