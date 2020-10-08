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
            $table->string('lname')->nullable();
            $table->string('userType')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('address1')->nullable();;
            $table->string('address2')->nullable();;
            $table->string('city')->nullable();;
            $table->string('district')->nullable();;
            $table->string('state')->nullable();;
            $table->string('pincode')->nullable();;
            $table->string('alternate_phone')->nullable();;

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
