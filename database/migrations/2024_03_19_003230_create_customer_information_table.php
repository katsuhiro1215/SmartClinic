<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('customer_information', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained();
            $table->dateTime('first_visit_datetime')->nullable()->comment('初回来院日時');
            $table->dateTime('last_visit_datetime')->nullable()->comment('最終来院日時');
            $table->integer('visit_count')->nullable()->comment('来院回数');
            $table->text('visit_purpose')->nullable()->comment('来院目的');
            $table->boolean('permission_photo')->default(false)->comment('写真使用許可');
            $table->boolean('permission_dm')->default(false)->comment('DM発送許可');
            $table->text('personal_history')->nullable()->comment('既往歴');
            $table->text('remarks')->nullable()->comment('備考欄');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('customer_information');
    }
};
