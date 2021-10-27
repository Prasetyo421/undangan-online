<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Testimoni extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function invitation()
    {
        return $this->belongsTo(Invitations::class, 'invitation_id');
    }
}
