<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Models\CustomUrlBlock;
use App\Http\Controllers\Controller;
use Response;

class ExtensionController extends Controller
{
    public function customBlockingList(Request $request)
    {
        $userId = $request->user()->id;

        $list = CustomUrlBlock::where('user_id', $userId)->pluck('url')->toArray();

        // dd($list);

        return Response::json($list);
    }
}
