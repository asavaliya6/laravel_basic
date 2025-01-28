<div>
   <h1>List of all images</h1>
   <a href="/image">Upload more images</a>
   <br>
   @foreach($imgData as $img)
   <img style="width:200px;margin:10px" src="{{url('storage/'.$img->path)}}" alt="">
   <br>
   @endforeach
</div>
