<?php

namespace App\Models\Common\Support;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SupportGroup extends Model
{
    use HasFactory, SoftDeletes;

    public $timestamps = false;
}
