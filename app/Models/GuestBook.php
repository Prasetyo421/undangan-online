<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GuestBook extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public static function deleteByInvitationId($invitationId)
    {
        // DB::table('guest_books')->delete();

        DB::table('guest_books')->where('invitation_id', $invitationId)->delete();
    }
}
