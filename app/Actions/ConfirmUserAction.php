<?php

namespace App\Actions;

use App\User;


class ConfirmUserAction
{
    public function __construct()
    {

    }

    public function execute(User $user)
    {
        $user->markEmailAsVerified();
        $this->notifyUserEmailHaveBeenVerified();
    }

    private function notifyUserEmailHaveBeenVerified()
    {
        // Email sent to user;
    }
}
