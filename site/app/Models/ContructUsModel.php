<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContructUsModel extends Model
{
    public $table='contruct_us';
    public $primaryKey='id';
    public $incrementing='true';
    public $keyType='int';
    public $timestamps=false;
    use HasFactory;
}
