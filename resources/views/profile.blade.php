<div>
    <h1>Profile</h1>
    @if(session('user'))
    <h1>welcome,{{session('user')}}</h1>
    @else
    <h1>No user found in session<a href="{{url('login')}}">Login</a></h1>
    @endif

    <a href="{{url('logout')}}">Logout</a>
    {{session('allData')['password']}}
</div>
