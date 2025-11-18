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
        Schema::create('contact_settings', function (Blueprint $table) {
            $table->id();
            $table->string('hero_title')->nullable();
            $table->text('hero_description')->nullable();
            $table->string('main_phone_label')->nullable();
            $table->string('main_phone_number')->nullable();
            $table->string('secondary_phone_label')->nullable();
            $table->string('secondary_phone_number')->nullable();
            $table->string('email')->nullable();
            $table->string('address_line_one')->nullable();
            $table->string('address_line_two')->nullable();
            $table->json('service_areas')->nullable();
            $table->timestamps();
        });

        DB::table('contact_settings')->insert([
            'hero_title' => 'Contact Us',
            'hero_description' => 'Ready to secure your property? Get in touch with our security professionals today.',
            'main_phone_label' => 'Main',
            'main_phone_number' => '519-770-6634',
            'secondary_phone_label' => 'Hamilton Area',
            'secondary_phone_number' => '905-928-9636',
            'email' => 'don@survailpro.ca',
            'address_line_one' => '148 Henry Street',
            'address_line_two' => 'Brantford ON N3S-5C7',
            'service_areas' => json_encode([
                ['title' => 'Brantford', 'subtitle' => '& Brant County'],
                ['title' => 'Hamilton', 'subtitle' => 'Greater Area'],
                ['title' => 'Waterloo', 'subtitle' => 'Region'],
                ['title' => 'Haldimand', 'subtitle' => 'County'],
            ]),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_settings');
    }
};
