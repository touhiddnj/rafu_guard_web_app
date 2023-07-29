<?php

namespace App\Http\Controllers;

use App\Models\CustomUrlBlock;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        return view('content.dashboard.dashboards-analytics');
    }

    public function customBlocking()
    {

        $customBlockList = CustomUrlBlock::all();
        return view('custom_blocking.index', compact('customBlockList'));
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

    public function customBlockingRemove($id)
    {
        $block = CustomUrlBlock::find($id);
        $block->delete();

        return redirect()->route('custom-blocking')->with('success', 'URL removed successfully.');
    }

    public function extensionIndex()
    {
        return view('extension.extension_index');
    }

    public function browsingIndex()
    {
        return view('browsing.browsing_index');
    }
    public function enableDomain($id)
    {
        $update =  CustomUrlBlock::where('id', $id)->update(['domain' => 'true']);
        dd($update);
    }
    public function disableDomain($id)
    {
        $update =  CustomUrlBlock::where('id', $id)->update(['domain' => null]);
        dd($update);
    }

    public function enableStatus($id)
    {
        $update =  CustomUrlBlock::where('id', $id)->update(['status' => 1]);
        dd($update);
    }
    public function disableStatus($id)
    {
        $update =  CustomUrlBlock::where('id', $id)->update(['status' => 0]);
        dd($update);
    }
}
