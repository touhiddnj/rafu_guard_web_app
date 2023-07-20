<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CustomUrlBlock;
use Illuminate\Http\Request;

class ExtensionController extends Controller
{
    public function customBlockingList(Request $request)
    {
        $userId = $request->user()->id;

        $list = CustomUrlBlock::where('user_id', $userId)->pluck('url')->toArray();

        dd($list);
    }
}
