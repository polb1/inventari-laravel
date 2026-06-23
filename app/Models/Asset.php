<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $fillable = [
        "nom",
        "serialNumber",
        "marca",
        "model",
        "category_id",
        "user_id",
        "estat",
        "ubicacio",
        "data_compra",
        "preu",
        "notes"
    ];
    protected $casts = [
        'data_compra' => 'date',
        'preu'=> 'decima:2',
    ];

    public function category(){
        return $this->belongsTo('Category::class');
    }

    public function user(){
        return $this->belongsTo('User:class');
    }

    public function history(){
        return $this->hasMany('AssetHistory::class');
    }
}
