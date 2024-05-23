<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Livewire\Actions\Logout;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function logout(Logout $logout)
    {
        $logout();

        return redirect('/');
    }
}
