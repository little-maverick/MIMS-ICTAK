<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'surname',
        'phone',
        'email',
        'address',
        'organization',
        'education',
        'membership_category',
        'additional_details',
    ];
}
