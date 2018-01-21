<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //$this->call(CategoryTableSeeder::class);
        $this->call(PageTableSeeder::class);
        $this->call(PostTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        //$this->call(BookTableSeeder::class);
        //$this->call(BookUserTableSeeder::class);
        //$this->call(ExamTableSeeder::class);


    }
}
