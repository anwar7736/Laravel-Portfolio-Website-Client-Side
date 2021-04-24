<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            [
                  "name" => "বিল গেটস",
                  "des" => "মাইক্রোসফটের প্রতিষ্ঠাতা বিল গেটসের জীবন কেটেছে নানা ঘটনার মধ্য দিয়ে। হার্ভার্ড বিশ্ববিদ্যালয়ে লেখাপড়া শেষ না করেই মাইক্রোসফট প্রতিষ্ঠা করা",
                  "img" => "/images/bill.jpg",
                  "created_at" => now(),
                  "updated_at" => now()
                            
            ]
        ]);
    }
}
