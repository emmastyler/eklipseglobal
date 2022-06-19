<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->integer('security_id')->nullable();
            $table->string('bitcoin_address')->nullable();
            $table->string('skrill_address')->nullable();
            $table->string('face_img')->nullable();
            $table->string('bank_name_1')->nullable();
            $table->integer('account_number_1')->nullable();
            $table->string('account_name_1')->nullable();
            $table->string('bank_name_2')->nullable();
            $table->integer('account_number_2')->nullable();
            $table->string('account_name_2')->nullable();
            $table->string('bank_name_3')->nullable();
            $table->integer('account_number_3')->nullable();
            $table->string('account_name_3')->nullable();
            $table->string('bank_name_4')->nullable();
            $table->integer('account_number_4')->nullable();
            $table->string('account_name_4')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
