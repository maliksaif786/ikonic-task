<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedbackCount extends Model
{
    use HasFactory;

    public function feedback()
    {
        return $this->belongsTo(Feedback::class);
    }
}
