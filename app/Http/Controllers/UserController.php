<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use DataTables;

class UserController extends Controller
{
    function addUser(Request $request){
        // echo "User name is $request->username";
        // echo "<br>";
        // echo "User email is $request->email";
        // echo "<br>";
        // echo "User City is $request->city";
        // echo "<br>";
        $request->validate([
            'username'=>'required | min:3 | max:10',
            'email'=>'required | email',
            'city'=>'required | uppercase',
        ],[
            'username.required'=>'username can not be empty',
            'username.min=>username min characters should be 3',
            'username.max=>username max characters limit is 15',
            // 'email.email=>This emial is not valid',
            'city.uppercase'=>'city should be in uppercase only',
        ]);
        return $request;
    }

    public function dashboard(Request $request)
    {
        return view('dashboard');
    }

    public function users(Request $request)
    {
        $users = User::get();
        return view('users', compact('users'));
    }
    public function logout(Request $request)
    {
        Session::flush();
        Auth::logout();
  
        return redirect()->route('login')->with('success', 'You have been logged out.');
    }
    public function index()
    {
        $users = User::select(
                DB::raw("COUNT(id) as count"),
                DB::raw("DATE_FORMAT(created_at, '%b') as month")
            )
            ->groupBy('month')
            ->orderByRaw("STR_TO_DATE(month, '%b')") 
            ->get();
        $chartData = [
            'labels' => $users->pluck('month')->toArray(),  
            'values' => $users->pluck('count')->toArray(),  
        ];

        return view('charts', compact('chartData'));
    }
    public function userPieData()
    {
        $usersByDate = User::select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as count'))
                            ->groupBy('date')
                            ->orderBy('date', 'ASC')
                            ->get();
    
        $labels = $usersByDate->pluck('date')->toArray(); 
        $counts = $usersByDate->pluck('count')->toArray(); 
    
        return response()->json([
            'labels' => $labels,
            'counts' => $counts
        ]);
    }
    public function ribbons(Request $request)
    {
        return view('ribbons');
    }
}
