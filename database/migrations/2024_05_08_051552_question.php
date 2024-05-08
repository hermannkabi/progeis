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
        Schema::table('questions', function (Blueprint $table) {
            // $table->integer("id")->primary();
            // $table->integer("test_id");
            // $table->integer("quest_nr");
            // $table->string("question");
            // $table->string("image");
            // $table->string("answer");
            // $table->string("choices");   
            $table->integer("points")->default(1);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
