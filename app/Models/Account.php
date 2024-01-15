<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'nama', 'jenis'
    ];

    protected $keyType = 'char';
    public $incrementing = false;
    protected $primarykey = 'id';

    public function transaction()
    {
        return $this->hasMany(Transaction::class,'accounts_id');
    }
    public function account()
    {
        static::creating(function($accounts){$accounts-> self::generateAccountId();
        });
    }
}
