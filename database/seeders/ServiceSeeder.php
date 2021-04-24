<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ServiceSeeder extends Seeder
{
    public function run()
    {
        DB::table('services')->insert([
        [
  			"service_name" => "আইটি কোর্স",
  			"service_des" => "মোবাইল এবং ওয়েব এপ্লিকেশন ডেভেলপমেন্ট",
  			"service_img" => "/images/knowledge.svg"
        				
        ],
        [
  			"service_name" => "সোর্স কোড",
  			"service_des" => "মোবাইল এবং ওয়েব এপ্লিকেশন ডেভেলপমেন্ট ",
  			"service_img" => "/images/code.svg"
  			
        ],
        [
  			"service_name" => "ইন্টারফেস",
  			"service_des" => "মোবাইল এবং ওয়েব এপ্লিকেশন ডেভেলপমেন্ট",
  			"service_img" => "/images/graphic.svg"
        ],
        [
  			"service_name" => "কাস্টম সার্ভিস",
  			"service_des" => "মোবাইল এবং ওয়েব এপ্লিকেশন ডেভেলপমেন্ট",
  			"service_img" => "/images/custom.svg"
        				
        ]
    ]);
    }
}
