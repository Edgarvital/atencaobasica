<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create(['tipo_usuario_id' => 1, 'email' => 'adgar.carvalho@hotmail.com']);
        User::factory()->create(['tipo_usuario_id' => 2, 'email' => 'edgar.tecnico@hotmail.com']);
    }
}
