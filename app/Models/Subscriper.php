<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subscriper extends Model
{
    use HasFactory;
    protected $table = 'subscripers';
    protected $fillable = [
        'email',
        'is_subscriper'
    ];
}
