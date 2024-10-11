<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrganizersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $facebookLink = "http://m.facebook.com/dummy";
        $XLink = "http://x.com/dummy";
        $websiteLink = "http://dummy.com";

        for ($i = 1; $i <= 5; $i++) {
            DB::table('organizers')->insert([
                'name'=> fake()->company(),
                'description'=>fake()->text(),
                'facebookLink'=>$facebookLink,
                'xLink'=>$XLink,
                'websiteLink'=>$websiteLink,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
