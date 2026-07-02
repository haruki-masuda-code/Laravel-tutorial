<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    use HasFactory;
    protected $fillable = [
        'office_id',
        'text',
    ];

    public function office()
    {
        return $this->belongsTo(Office::class);
    }
}
