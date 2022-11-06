<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use App\Models\Agama;

class Detail_data extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function agama()
    {
        return $this->belongsTo(Agama::class, 'id_agama');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
