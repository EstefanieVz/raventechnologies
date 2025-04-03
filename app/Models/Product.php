<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'name','description','image','unit_price'];

    // public function user(): BelongsTo
    // {
    //     return $this->belongsTo(User::class/*, 'foreign_key', 'other_key'*/);
    // }
}
