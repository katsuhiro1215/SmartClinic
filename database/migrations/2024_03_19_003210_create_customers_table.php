<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('lastname', 40)->comment('姓');
            $table->string('firstname', 40)->comment('名');
            $table->string('lastname_kana', 50)->comment('セイ');
            $table->string('firstname_kana', 50)->comment('メイ');
            $table->string('customer_photo_path')->nullable()->comment('顧客写真');
            $table->date('birth')->nullable()->comment('生年月日');
            $table->string('gender', 10)->nullable()->comment('性別');
            $table->string('blood', 10)->nullable()->comment('血液型');
            $table->string('zipcode', 10)->nullable()->comment('郵便番号');
            $table->string('address1', 20)->comment('都道府県名');
            $table->string('address2', 30)->comment('市区町村名');
            $table->string('address3', 50)->nullable()->comment('町域名');
            $table->string('address4', 100)->nullable()->comment('それ以降の住所');
            $table->string('phone_number', 20)->nullable()->comment('電話番号');
            $table->string('mobile_number', 20)->nullable()->comment('携帯番号');
            $table->string('email')->nullable()->comment('メールアドレス');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
