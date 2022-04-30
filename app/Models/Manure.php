<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Manure extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'manures';
    protected $guarded = false;

    public function culture()
    {
        return $this->belongsTo(Culture::class, 'culture_id', 'id');
    }
}
