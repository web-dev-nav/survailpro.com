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
        Schema::table('contact_settings', function (Blueprint $table) {
            $table->string('contact_form_recipient_email')->nullable()->after('email');
            $table->string('application_recipient_email')->nullable()->after('contact_form_recipient_email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contact_settings', function (Blueprint $table) {
            $table->dropColumn([
                'contact_form_recipient_email',
                'application_recipient_email',
            ]);
        });
    }
};
