<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Emilio Roman',
            'email' => 'eranet1973@hotmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('2600420Df'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Paola Moya',
            'email' => 'moyajorquerapaola@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('2600420Df'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
