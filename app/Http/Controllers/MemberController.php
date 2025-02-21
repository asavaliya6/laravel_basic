<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{

    public function index()
    {
        $stud = Stud::all();
        return ['result'=>$stud];
    }

    public function create()
    {
        return ['result'=>"list created"];
    }

    public function store(Request $request)
    {
        return ['result'=>"new member added"];
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        return ['result'=>"member updated"];
    }

    public function destroy(string $id)
    {
        //
    }
}
