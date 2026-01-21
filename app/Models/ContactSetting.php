<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'hero_title',
        'hero_description',
        'main_phone_label',
        'main_phone_number',
        'secondary_phone_label',
        'secondary_phone_number',
        'email',
        'address_line_one',
        'address_line_two',
        'service_areas',
        'google_analytics_id',
    ];

    protected $casts = [
        'service_areas' => 'array',
    ];
}
