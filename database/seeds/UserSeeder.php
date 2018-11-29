<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama_depan' => 'Admin',
            'nama_belakang' => 'Sinau Yo',
            'email' => 'admin.sinau@gmail.com',
            'password' => bcrypt('uji123'),
            'role' => 'admin',
            'username' => 'admin.sinau'
        ]);
    }
}
