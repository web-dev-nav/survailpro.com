<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('contact_settings', function (Blueprint $table) {
            $table->string('google_analytics_id')->nullable()->after('service_areas');
        });

        DB::table('contact_settings')
            ->whereNull('google_analytics_id')
            ->update(['google_analytics_id' => 'G-G5TGDBX4ZE']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contact_settings', function (Blueprint $table) {
            $table->dropColumn('google_analytics_id');
        });
    }
};
