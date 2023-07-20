<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExtensionController extends Controller
{
    public function customBlockingList(Request $request)
    {
        $userId = $request->user()->id;
    }
}
