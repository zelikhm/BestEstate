<?php

namespace App\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class LogOutController extends Controller
{
    public function __invoke(): RedirectResponse
    {
        auth()->logout();

        return response()->redirectTo('/');
    }
}
