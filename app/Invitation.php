<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'invitation_token'
    ];

    /**
     * Generates a new invitation token.
     *
     * @return bool|string
     */
    public function generateInvitationToken() {
        $this->invitation_token = substr(md5(rand(0, 9) . $this->email . time()), 0, 32);
    }

    /**
     * @return string
     */
    public function getLink() {
        return urldecode(route('register') . '?invitation_token=' . $this->invitation_token);
    }
}
