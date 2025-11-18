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
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('website_url')->nullable();
            $table->string('logo_path');
            $table->unsignedInteger('display_order')->default(0);
            $table->timestamps();
        });

        DB::table('partners')->insert([
            [
                'name' => 'Partner Company',
                'website_url' => '#',
                'logo_path' => 'assets/images/partners/logoipsum-391.png',
                'display_order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Partner Company',
                'website_url' => '#',
                'logo_path' => 'assets/images/partners/logoipsum-395.png',
                'display_order' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Partner Company',
                'website_url' => '#',
                'logo_path' => 'assets/images/partners/logoipsum-406.png',
                'display_order' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Partner Company',
                'website_url' => '#',
                'logo_path' => 'assets/images/partners/logoipsum-408.png',
                'display_order' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partners');
    }
};
