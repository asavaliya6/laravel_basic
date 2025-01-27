<!-- session -->
<!-- <div>
    <h1>Login</h1>
    <form action="{{url('login')}}" method="post">
        @csrf
        <input type="text" name="user" placeholder="enter name">
        <br>
        <br>
        <input type="password" name="password" placeholder="enter password">
        <br>
        <br>
        <button>Login</button>
    </form>
</div> -->

<!-- flash session -->
<div>
    <h1>Add New User</h1>
    <!-- {{session('message')}} -->

    @if(session('message'))
    <span class="success-message">{{session('message')}}</span>
    @endif
    <!-- {{session()->reflash()}} -->

    @if(session('name'))
    <span class="success-message">{{session('name')}}</span>
    @endif

    {{session()->keep(['name'])}}

    <form action="add" method="post">
        @csrf
        <input type="text" name="username" placeholder="Enter User name">
        <br>
        <br>
        <input type="text" name="email" placeholder="Enter User email">
        <br>
        <br>
        <input type="text" name="phone" placeholder="Enter User phone">
        <br>
        <br>
        <button>Add New User</button>
    </form>
</div>
<style>
    .success-message{
        background-color:lightgreen;
        border-radius:2px;
        padding:2px 20px;
        margin-bottom:10px;
        display:inline-block;
    }
</style>
