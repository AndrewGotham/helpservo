<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Priority extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'priorities';

    protected $casts = [
        'updated_at' => 'datetime',
        'created_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    protected $fillable = [
        'name',
        'color',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'priority_id', 'id');
    }
}
