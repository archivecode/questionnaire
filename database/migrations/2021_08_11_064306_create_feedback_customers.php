<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackCustomers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback_customers', function (Blueprint $table) {
            $table->id();

            $table->foreignId('customer_id')
                ->references('id')
                ->on('customers');

            $table->foreignId('developer_id')
                ->references('id')
                ->on('developers');

//            $table->foreignId('question_id')
//                ->references('id')
//                ->on('questions');

//            $table->tinyInteger('rating');

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
        Schema::dropIfExists('feedback_customers');
    }
}
