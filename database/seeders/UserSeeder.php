<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $isExist = DB::table("users")->where("email", "")->exists();

        if ($isExist) {
            return;
        }

        for ($i = 1; $i <= 10; $i++) {
            DB::table("users")->insert([
                "name"=>"user{$i}", 
                "email"=>"user{$i}@gmail.com" , 
                "password"=> encrypt("2333"),
            ]);
        }
    }
}