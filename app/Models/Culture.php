<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Culture extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'cultures';
    protected $guarded = false;

    public function manures()
    {
        return $this->hasMany(Manure::class, 'culture_id', 'id');
    }
}
