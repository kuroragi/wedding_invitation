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
        Schema::create('wedding', function (Blueprint $table) {
            $table->id();
            $table->string('bride');
            $table->string('groom_name');
            $table->string('bride_name');
            $table->string('groom_name_with_title');
            $table->string('bride_name_with_title');
            $table->string('groom_nickname');
            $table->string('bride_nickname');
            $table->string('groom_parent');
            $table->string('bride_parent');
            $table->dateTime('marriage_time');
            $table->string('marriage_place');
            $table->text('marriage_embed');
            $table->dateTime('first_reception_time');
            $table->string('first_reception_place');
            $table->text('first_reception_embed');
            $table->dateTime('second_reception_time');
            $table->string('second_reception_place');
            $table->text('second_reception_embed');
            $table->boolean('has_second_reception');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wedding');
    }
};
