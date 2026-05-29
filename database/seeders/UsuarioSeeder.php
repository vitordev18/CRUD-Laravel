<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsuarioSeeder extends Seeder
{
  public function run()
  {
    $dados = [
      'name' => "Admin",
      'email' => "admin@gmail.com",
      'password' => bcrypt("123")
    ];

    if (User::where('email', '=', $dados['email'])->count()) {
      $usuario = User::where('email', '=', $dados['email'])->first();
      $usuario->update($dados);
    } else {
      User::create($dados);
    }
  }
}
