<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInitateReceptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('initate_recepts', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->integer('account_number')->nullable();
            $table->string('account_name')->nullable();
            $table->integer('bank_code')->nullable();
            $table->string('currency')->nullable();
            $table->string('recipient_code')->nullable();
            $table->string('bank_name')->nullable();
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
        Schema::dropIfExists('initate_recepts');
    }
}
