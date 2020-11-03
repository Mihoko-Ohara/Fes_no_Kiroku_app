<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fes extends Model
{
    protected $table = 'fes';  //モデルとテーブルを紐づけ
    protected $primaryKey = 'id'; //プライマリーキーを id に紐づけ
    public $timestamps = false; //タイムスタンプを無効にする ※必要
}
