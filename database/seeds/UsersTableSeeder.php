<?php
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
        	'nip' => '240594',
        	'name' => 'furin',
        	'email' => 'furin@gmail.com',
        	'jabatan' => 'Kasi dah',
        	'nama_jabatan' => 'kepala seksi',
        	'alamat' => 'tirto',
        	'no_hp' => '085866231383',
        	'id_skpd' => '2.10.1.1',
        	'password' => bcrypt('123456')
        	]);
    }
}
