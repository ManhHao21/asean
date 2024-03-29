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
        Schema::table('customer_hightlights', function (Blueprint $table) {
            $table->integer('is_active')->default(0)->after('link');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('customer_hightlights', function (Blueprint $table) {
            $table->dropColumn('is_active');
        });
    }
};
