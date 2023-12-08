<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Histories extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'public',
        'member_id',
        'events',
        'created',
        'updated',
    ];

    protected $casts = [
        'events' => 'array',
    ];

    public function getRandom()
    {
        $histories = Histories::all();
        return $histories->random(1);
    }
}
