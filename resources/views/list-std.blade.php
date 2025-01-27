<div>
    <h1>Student List</h1>
    <!-- {{print_r($stds)}} -->
     <form action ="search" method="get">
        <input type="text" placeholder="Search with name" name="search"
        value="{{@$search}}"/>
        <button>Search</button> 
    </form>
    <form action="delete-multi" method="post">
        @csrf
        <button>Delete</button>
        <table border="1">
        <tr>
            <td>Section</td>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Created_at</td>
            <td>Operation</td>
        </tr>
        <tr>
            @foreach($stds as $std)
            <tr>
                <td><input type="checkbox" name="ids[]" value="{{$std->id}}"></td>
                <td>{{$std->name}}</td>
                <td>{{$std->email}}</td>
                <td>{{$std->phone}}</td>
                <td>{{$std->created_at}}</td>
                <td><a href="{{url('delete/'.$std->id)}}">Delete</a></td>
                <td><a href="{{url('edit/'.$std->id)}}">Edit</a></td>
            </tr>
            @endforeach
        </table>
     </form>
     <br>
     <br>
     {{$stds->links()}}
</div>
<style>
    .w-5.h-5{
        width:20px;
    }
</style>