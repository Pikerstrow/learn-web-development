<?php

use App\Models\Tutorial\Lesson;
use App\Models\Tutorial\Rating;
use App\Models\Tutorial\Tutorial;
use App\Models\Tutorial\TutorialSection;

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
        factory(Tutorial::class, 4)->create();
        factory(Rating::class, 4)->create();

        /*Connecting tutorials_page to ratings*/
        $tutorials = Tutorial::all();

        $tutorials->each(function($tutorial){
            $rating = Rating::whereNull('tutorial_id')->first();
            $rating->update(['tutorial_id' => $tutorial->id]);
        });

        factory(TutorialSection::class, 32)->create();
        factory(Lesson::class, 356)->create();



    }
}
