<?php

namespace App\Http\Controllers\Api;

use Response;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\CustomUrlBlock;
use App\Http\Controllers\Controller;

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
            'message' => 'URL added to custom block list Successfully',
            'success' => true,
        ];

        return response()->json($data);
    }

    public function logActivity(Request $request)
    {
        $userId = auth()->id();

        // Find the user by their ID
        $user = User::find($userId);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        // Update the column value
        $user->ext_last_activity = now(); // Replace 'column_name' and 'new_value' with your actual column and value

        // Save the changes
        $user->save();

        return response()->json(['message' => 'User updated successfully'], 200);
    }

    public function getActivity()
    {
        $userId = auth()->id();

        // Find the user by their ID
        $user = User::find($userId);

        // Get the current time using Carbon
        $currentTime = Carbon::now();

        // Assuming you have a 'datetime_column' in your table
        $datetimeFromDatabase =  $user->ext_last_activity;

        // Parse the datetime from the database as a Carbon instance
        $datetimeFromDatabase = Carbon::parse($datetimeFromDatabase);

        // Calculate the difference in seconds
        $differenceInSeconds = $currentTime->diffInSeconds($datetimeFromDatabase);

        // Return the result as a JSON response

        return response()->json(['last_activity' => $differenceInSeconds], 200);
    }
}
