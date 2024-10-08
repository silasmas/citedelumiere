<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class message extends Mailable
{
    use Queueable, SerializesModels;

    public User $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    public function build()
    {
        return $this->markdown('emails.msg')->subject("Nouveau message sur le site");
    }
}
