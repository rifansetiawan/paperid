<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPSTORM_META\map;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_id',
        'photo_id',
        'title',
        'body',
        'amount'
    ];

    public function user(){
        return $this -> belongsTo('App\Models\User');
    }
}
