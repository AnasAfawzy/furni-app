<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'message',
        'catgory_id'
    ];

    public function catgory()
    {
        return $this->belongsTo(Catgory::class);
    }
}
