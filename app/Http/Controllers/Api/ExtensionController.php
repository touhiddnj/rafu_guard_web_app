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

        $list = CustomUrlBlock::where('user_id', $userId)->whereNull('domain')->pluck('url')->toArray();

        // dd($list);

        return Response::json($list);
    }

    public function customBlockingDomainList(Request $request)
    {
        $userId = $request->user()->id;

        $list = CustomUrlBlock::where('user_id', $userId)->where('domain', '=', 'true')->pluck('url')->toArray();

        // dd($list);

        return Response::json($list);
    }

    public function customBlockingAdd(Request $request)
    {
        $userId = auth()->id(); // Assuming you're using Laravel's authentication system
        $request->merge(['user_id' => $userId]);


        CustomUrlBlock::create($request->except('_token'));

        $data = [
            'message' => 'Successfully added',
            'success' => true,
        ];

        return response()->json($data);
    }
}
