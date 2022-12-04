<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Permissions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('user');
            $table->string('permission')->unique();

            
            $table->string('login2');
            $table->string('email')->unique();
            $table->date('dateOfBirth');
            $table->string('phoneNumber')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password2');
            $table->string('city');
            $table->string('avatar');
            $table->rememberToken();
            $table->boolean('persData');
            $table->boolean('mailing');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permissions');
    }
}
