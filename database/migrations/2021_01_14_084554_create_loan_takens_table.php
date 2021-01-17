<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanTakensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_takens', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->integer('amount')->nullable();
            $table->string('source')->nullable();
            $table->string('currency')->nullable();
            $table->string('recipient')->nullable();
            $table->string('reference')->nullable();
            $table->string('reason')->nullable();
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
        Schema::dropIfExists('loan_takens');
    }
}
