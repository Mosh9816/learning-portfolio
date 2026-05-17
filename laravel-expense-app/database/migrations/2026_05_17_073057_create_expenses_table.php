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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->string('title');              // 経費タイトル
            $table->integer('amount');            // 金額
            $table->string('category')->nullable(); // カテゴリ（交通費など）
            $table->date('date')->nullable();     // 発生日
            $table->text('note')->nullable();     // 備考
            $table->string('receipt_path')->nullable(); // 領収書画像パス
            $table->string('status')->default('pending'); // pending / approved / rejected
            $table->timestamps();                 // created_at / updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
