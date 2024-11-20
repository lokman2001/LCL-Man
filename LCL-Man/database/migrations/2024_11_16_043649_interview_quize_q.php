<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('interview_quize_qs', function (Blueprint $table) {
            $table->id();
            $table->string('quize_id');
            $table->longText('question');
            $table->longText('correct_answer');
            $table->LongText('answer1');
            $table->LongText('answer2');
            $table->LongText('answer3');
            $table->LongText('answer4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('interview_quize_qs');
    }
};
