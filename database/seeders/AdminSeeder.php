<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            'name'=>'Admin',
            'email' =>'admin@admin.com',
            'phone_number'=>'7064155716',
            'password'=>bcrypt('admin@123')
        ];
        Admin::create($admin);
    }
}
