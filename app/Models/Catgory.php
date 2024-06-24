<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catgory extends Model
{
    use HasFactory;
    /**
     * Get the contacts for the blog post.
     */
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}
