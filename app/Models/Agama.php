<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agama extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function detail_data()
    {
        return $this->hasOne(Detail_data::class, 'id_agama');
    }
}
