<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Creo el esquema de usuarios
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('role');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        // Creo un usuario administrador
        $this->createAdmin();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }

    /**
     * Creo un nuevo usuario con el rol administrador tomando los valores del
     * archivo ".env" para sus datos.
     * @return App\User Devuelve el usuario insertado en la tabla
     */
    private function createAdmin()
    {
        $user = new App\User;
        $user->name = env('USER_ADMIN_NAME');
        $user->role = 'admin';
        $user->email = env('USER_ADMIN_EMAIL');
        $user->password = bcrypt(env('USER_ADMIN_PASSWORD'));
        $user->save();

        return $user;
    }
}
