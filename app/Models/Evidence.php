<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evidence extends Model
{
    use HasFactory;

    protected $fillable = [
        'file',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    protected $hidden = [

    ];

    protected $table = 'evidence';

}
