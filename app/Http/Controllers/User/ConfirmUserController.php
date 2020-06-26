<?php

namespace App\Http\Controllers\User;

use App\Actions\ConfirmUserAction;
use App\Http\Controllers\Controller;
use App\Services\PostsService;
use App\User;
use Illuminate\Http\Request;

class ConfirmUserController extends Controller
{
    public function __invoke(User $user, Request $request, ConfirmUserAction $confirmUserAction)
    {
        $confirmUserAction->execute($user);
        session()->flash('success', 'Your account has been activated!');
        return back();
    }
}
