<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\DB;
use App\Models\Contact;

class ContantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::factory()->count(35)->creaye();
    }
}
