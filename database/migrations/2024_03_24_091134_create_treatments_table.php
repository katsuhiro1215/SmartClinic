<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('treatments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('treatment_category_id')->constrained();
            $table->string('name', 50)->comment('施術名');
            $table->text('description')->nullable()->comment('概要');
            $table->string('treatment_photo_path')->nullable()->comment('施術画像');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('treatments');
    }
};
