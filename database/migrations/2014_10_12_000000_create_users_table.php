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
            $table->increments('id');
            $table->integer('account_id')->index();
            $table->string('name', 25);
            $table->string('email', 50)->unique();
            $table->bigInteger('phone')->nullable();
            $table->integer('identification')->nullable();
            $table->string('password')->nullable();
            $table->boolean('owner')->default(false);
            $table->string('photo_path', 100)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->bigInteger('primary_number')->nullable();
            $table->bigInteger('secondary_number')->nullable();
            $table->string('address')->nullable();
            $table->string('location')->nullable();
            $table->string('gender')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

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
