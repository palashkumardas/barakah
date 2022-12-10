<?php

use Illuminate\Database\Seeder;
use App\Models\CookiesPolicy;

class CookiesPolicySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $terms_conditions = [
            [
                'title' => 'Terms & Conditions', 
                'description' => 'This is the test descriptions', 
                'created_at' => now(), 
            ]

        ];

        CookiesPolicy::insert($terms_conditions);
    }
}
