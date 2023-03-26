<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
   public function show(string $id): View
   {
    return View('user.profile', [
        'user' => User::FindOrFail($id)
    ]);
   }
}