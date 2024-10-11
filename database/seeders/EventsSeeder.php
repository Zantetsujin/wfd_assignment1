<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function Laravel\Prompts\table;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $eventName = [
            "Indonesia Innovation Challenge 2024 Powered by Launch Pad",
            "Kids Education Expo 2024",
            "Surabaya Great Expo 2024",
            "SMEX (Surabaya Music, Multimedia, and Lighting Expo 2024",
            "Japan Edu Expo 2024",
            "Surabaya Hospital Expo 2024"
        ];

        $eventVenue = [
            "Jatim Expo",
            "The Westin",
            "Grand City Surabaya",
            "Grand City Surabaya",
            "Hotel Said",
            "Grand City Surabaya"
        ];

        $eventDate = [
            "Wed, Oct 23 2024",
            "Mon, Oct 21 2024",
            "Wed, Oct 16 2024",
            "Sun, Sep 29 2024",
            "Sun, Sep 22 2024",
            "Fri, Oct 11 2024"
        ];

        $eventStartTime = [
            "09.00 AM",
            "09.00 AM",
            "08.00 AM",
            "08.00 AM",
            "08.00 AM",
            "08.00 AM",
        ];

        $eventBookingUrl = [
            "https://www.eventbrite.com/e/indonesia-innovation-challenge-2024",
            "https://www.eventbrite.com/e/kids-education-expo-2024",
            "https://www.eventbrite.com/e/surabaya-great-expo-2024",
            "https://www.eventbrite.com/e/surabaya-music-multimedia-and-light",
            "https://www.eventbrite.com/e/japan-edu-expo-2024",
            "https://www.eventbrite.com/e/surabaya-hospital-expo-2024"
        ];

        $eventTag = [
            "Challenge",
            "Expo",
            "Expo",
            "Expo",
            "Expo",
            "Expo",
        ];

        for ($i = 1; $i <= 6; $i ++) {
            DB::table('events')->insert([
                'name'=>$eventName[$i - 1],
                'venue'=>$eventVenue[$i - 1],
                'date'=>$eventDate[$i - 1],
                'start_time'=>$eventStartTime[$i - 1],
                'description'=>fake()->text(),
                'booking_url'=>$eventBookingUrl[$i - 1],
                'tags'=>$eventTag[$i - 1],
                'organizer_id' => rand(1, 5),
                'event_category_id'=>rand(1, 3),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
