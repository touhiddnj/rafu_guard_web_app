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


    public function overview()
    {
        // return view('home');
        return view('overview/overview_index');
    }

    public function customBlocking()
    {
        $userId = auth()->id(); // Assuming you're using Laravel's authentication system

        $customBlockList = CustomUrlBlock::where('user_id',  $userId)->get();
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

    public function diskInformation()
    {
        return view('disk_information.disk_information_index');
    }




    public function enableDomain($id)
    {
        /*         $info = CustomUrlBlock::find($id);
        dd($info); */
        $update =  CustomUrlBlock::where('id', $id)->update(['domain' => 'true']);
        if ($update) {
            $data = [
                'message' => 'Domain enabled successfully',
                'success' => true,
            ];

            return response()->json($data);
        } else {
            $data = [
                'message' => 'Write to database failed',
                'success' => false,
            ];

            return response()->json($data);
        }
    }
    public function disableDomain($id)
    {
        /*         $info = CustomUrlBlock::find($id);
        dd($info); */
        // dd($id);
        $update =  CustomUrlBlock::where('id', $id)->update(['domain' => null]);
        if ($update) {
            $data = [
                'message' => 'Successfully disabled successfully',
                'success' => true,
            ];

            return response()->json($data);
        } else {
            $data = [
                'message' => 'Write to database failed',
                'success' => false,
            ];

            return response()->json($data);
        }
    }

    public function enableStatus($id)
    {
        /*         $info = CustomUrlBlock::find($id);
        dd($info); */
        $update =  CustomUrlBlock::where('id', $id)->update(['status' => 1]);
        if ($update) {
            $data = [
                'message' => 'Successfully enabled',
                'success' => true,
            ];

            return response()->json($data);
        } else {
            $data = [
                'message' => 'Write to database failed',
                'success' => false,
            ];

            return response()->json($data);
        }
    }
    public function disableStatus($id)
    {
        $update =  CustomUrlBlock::where('id', $id)->update(['status' => 0]);
        if ($update) {
            $data = [
                'message' => 'Successfully disabled',
                'success' => true,
            ];

            return response()->json($data);
        } else {
            $data = [
                'message' => 'Write to database failed',
                'success' => false,
            ];

            return response()->json($data);
        }
    }
}
