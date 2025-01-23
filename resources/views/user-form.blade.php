<div>
    <h2>Add New User</h2>
    <!-- @if($errors->any())
    @foreach($errors->all() as $error)
    <div style="color:red">
        {{$error}}
    </div>
    @endforeach
    @endif -->
    <form action="adduser" method="post">
        @csrf
        <div class="input-wrapper">
            <H5>Name</H5>
                <input type="text" placeholder="Enter User Name" name="username" value ="{{old('username')}}"
                class="{{$errors->first('username')?'input-error':''}}">
                <span style="color:red">@error('username'){{$message}}@enderror</span>
            </div>
        <div class="input-wrapper">
            <H5>Email</H5>
                <input type="text" placeholder="Enter User Email" name="email" value ="{{old('email')}}"
                class="{{$errors->first('email')?'input-error':''}}">
                <span style="color:red">@error('email'){{$message}}@enderror</span>
            </div>
            <div class="input-wrapper">
            <H5>City</H5>
                <input type="text" placeholder="Enter User City" name="city" value ="{{old('city')}}"
                class="{{$errors->first('city')?'input-error':''}}">
                <span style="color:red">@error('city'){{$message}}@enderror</span>
            </div>
        <div class="input-wrapper">
            <button>Add New User</button>
        </div>
    </form>
</div>

<style>
    input{
        border:black 1px solid;
        height:35px;
        width:200px;
        border-radius:2px;
        color:black;
    }
    .input-wrapper{
        margin:10px;
    }
    button{
        border:black 1px solid;
        height:35px;
        width:200px;
        border-radius:2px;
        color:black;
        background-color:#fff;
        cursor: pointer;
    }
    .input-error{
        border:1px solid red;
        colcor:red;
    }
</style>