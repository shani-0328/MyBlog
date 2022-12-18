<?php

use Illuminate\Database\Seeder;

class ConfigsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Config::insert([
            ['name' => 'site_name', 'value' => 'Shanika Wijenayake (-'],
            ['name' => 'site_title', 'value' => 'Shanika Wijenayake (-'],
            ['name' => 'copyright_owner', 'value' => 'Shanika Wijenayake (-'],
            ['name' => 'admin_email', 'value' => 'admin@gmail.com'],
        ]);
    }
}
