<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrayerRequest extends Model
{
    protected $fillable = ['fullname', 'email', 'mobile', 'address', 'subject', 'message'];
}
