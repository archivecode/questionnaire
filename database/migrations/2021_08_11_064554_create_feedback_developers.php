<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackDevelopers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback_developers', function (Blueprint $table) {
            $table->id();

            $table->foreignId('developer_id')
                ->references('id')
                ->on('customers');

            $table->foreignId('customer_id')
                ->references('id')
                ->on('developers');

            $table->foreignId('question_id')
                ->references('id')
                ->on('questions');

            $table->tinyInteger('rating');

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
        Schema::dropIfExists('feedback_developers');
    }
}
