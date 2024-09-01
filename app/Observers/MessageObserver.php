<?php

namespace App\Observers;

use App\Mail\message as ms;
use App\Models\message;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class MessageObserver
{
    /**
     * Handle the message "created" event.
     */
    public function created(message $message): void
    {
        $user = User::whereHas('roles', function ($query) {
            $query->where('titre', "Admin");
        })->get();
        if ($user) {
            foreach ($user as $u) {
                Mail::to($u->email)->send(new ms($u));
            }
        }
    }

    /**
     * Handle the message "updated" event.
     */
    public function updated(message $message): void
    {
        //
    }

    /**
     * Handle the message "deleted" event.
     */
    public function deleted(message $message): void
    {
        //
    }

    /**
     * Handle the message "restored" event.
     */
    public function restored(message $message): void
    {
        //
    }

    /**
     * Handle the message "force deleted" event.
     */
    public function forceDeleted(message $message): void
    {
        //
    }
}
