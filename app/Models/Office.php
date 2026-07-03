<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Traits\DeleteFlagTrait;
class Office extends Model
{
    use HasFactory;
    use DeleteFlagTrait;

    protected $table = 'offices';

    protected $primaryKey = 'id';

    protected $fillable = [
    'name',
    'address',
    'post_code',
    'stair',
    'comment',
    'del_flg',
    ];

    public function memos()
    {
        return $this->hasMany(Memo::class);
    }

    public function getData(){
        return self::with('memos')->get();
    }


}
