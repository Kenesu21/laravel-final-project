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
        Schema::create('on_time_payors', function (Blueprint $table) {
            $table->id();
            $table->string('Borrower_Name');
            $table->date('Date_of_Transaction');
            $table->integer('Amount_of_Money_Borrowed');
            $table->text('Remarks');
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
        Schema::dropIfExists('on_time_payors');
    }
};
