<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Office extends Model
{
    use HasFactory;

    protected $table = 'offices';

    protected $primaryKey = 'id';

    protected $fillable = [
    'name',
    'address',
    'post_code',
    'stair',
    'comment'
    ];

    public function getData(){
        $data = DB::table($this->table)->get();
        return $data;
    }


}
