<!-- <div> -->
<!-- {{
        print_r($users)
    }} -->
    
    <!-- Database Query Builder- with & without model -->
    <!-- <h1>Users List</h1>
    <table border ="1">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Email_Verified_At</td>
            <td>Password</td>
            <td>Created_At</td>
            <td>Updated_At</td>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->email_verified_at}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
        </tr>
        @endforeach
    </table> -->
<!-- </div> -->

@extends('theme.default')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Users</h1>
    <div class="row">
        <table class="table table-bordered data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">There are no users.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

