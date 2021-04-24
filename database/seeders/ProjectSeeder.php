<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('projects')->insert([
        [
  			"project_name" => "আইটি কোর্স",
  			"project_des" => "মোবাইল এবং ওয়েব এপ্লিকেশন ডেভেলপমেন্ট",
  			"project_link" => "",
  			"project_img" => "/images/poject.jpg"
        				
        ]
    ]);
    }
}
