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
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unique();
            $table->boolean('is_admin')->nullable($value = true);
            $table->string('phones', 11)->unique();
            $table->string('address', 300)->nullable($value = true);
            $table->timestamp('created_at')->nullable()->comment('登録日時');
            $table->bigInteger('created_by')->nullable()->comment('登録者ID');
            $table->timestamp('updated_at')->nullable()->comment('更新日時');
            $table->bigInteger('updated_by')->nullable()->comment('更新者ID');
            $table->timestamp('deleted_at')->nullable()->comment('削除日時');
            $table->bigInteger('deleted_by')->nullable()->comment('削除者ID');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExist('user_details');
    }
};
