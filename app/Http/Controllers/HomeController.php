<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Render the user's homepage.
     */
    public function __invoke(Request $request): View
    {
        return view('home', [
            'title' => 'Home',
            'user' => $request->user(),
        ]);
    }
}
