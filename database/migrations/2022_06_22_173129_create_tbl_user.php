<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_user', function (Blueprint $table) {
            $table->Increments('user_id');
            $table->integer('work_id');
            $table->integer('market_id');
            $table->string('user_name',100);
            $table->string('user_bookstore');
            $table->string('user_company',150);
            $table->integer('user_phone');
            $table->string('user_email',100);
            $table->text('user_content');
            $table->string('user_business',100);
            $table->string('user_logo');
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
        Schema::dropIfExists('tbl_user');
    }
}
