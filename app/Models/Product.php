<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    public function Name ():BelongsTo{
        return $this->belongsTo(Category::class);
    }
}
