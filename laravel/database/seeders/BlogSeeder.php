<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //นำ ไฟล์ Model -> Blog มาใช้งาน
        Blog::factory()->count(10)->create(); //Generate ข้อมูลจำนวน 10 
    }
}
