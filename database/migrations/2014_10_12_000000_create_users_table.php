<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('join_date')->unique();
            $table->string('phone_number')->nullable();
            $table->string('status')->nullable();
            $table->string('role_name')->nullable();
            $table->string('avatar')->nullable();
            $table->string('position')->nullable();
            $table->string('department')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
            [
                'name'=>'USERTEST',
                'email'=>'usertest@gmail.com',
                'join_date'=>'Wed, Jul 13, 2022 6:19 PM',
                'phone_number'=>'0123',
                'status'=>'Active',
                'role_name'=>'Pasien',
                'avatar'=>'photo_defaults.jpg', 
                'password' => '$2y$10$JHfUf6b49JuvUVDMHsM/He4eAil4E562DeCC7c.FezqTTqTn5jie2'
            ]

        ]);

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
}
