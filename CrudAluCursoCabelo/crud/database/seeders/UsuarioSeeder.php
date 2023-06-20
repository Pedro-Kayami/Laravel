<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = ['name' => "adm", 'email' => "admin@gmail.com", 'password' => bcrypt("123")];
        User::create($dados);
    }
}
