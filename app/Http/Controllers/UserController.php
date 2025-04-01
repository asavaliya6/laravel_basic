<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use DataTables;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use App\Imports\UsersImport;

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

    // Bar Chart
    public function getBarChartData()
    {
        $users = User::selectRaw("DATE(created_at) as date, COUNT(*) as count")
            ->groupBy('date')
            ->orderBy('date', 'ASC')
            ->get();

        return response()->json([
            'labels' => $users->pluck('date'),
            'counts' => $users->pluck('count'),
        ]);
    }

    // Pie Chart
    public function getPieChartData()
    {
        $users = User::selectRaw("DATE(created_at) as date, COUNT(*) as count")
            ->groupBy('date')
            ->orderBy('date', 'ASC')
            ->get();
    
        return response()->json([
            'labels' => $users->pluck('date'),
            'counts' => $users->pluck('count'),
        ]);
    }    

    public function ribbons(Request $request){
        return view("ribbons");
    }

    public function index()
    {
        $users = User::get();
  
        return view('userfile', compact('users'));
    }

    public function export() 
    {
        return Excel::download(new UsersExport, 'users.csv');
    }

    public function import(Request $request) 
    {
        $request->validate([
            'file' => 'required|max:2048',
        ]);
  
        Excel::import(new UsersImport, $request->file('file'));
                 
        return back()->with('success', 'Users imported successfully.');
    }

}
