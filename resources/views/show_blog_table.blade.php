<link rel="stylesheet" href="{{asset('style.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<body style="background-color:#9bc86a">
<div style="text-align:center; color:white">@if(session()->has('msg'))<h5>{{session()->get('msg')}}</h5> @endif </div>

<div style="text-align:end; padding-right:50px"><a href="{{url('inser-blog')}}" class="btn btn-primary ">Create Blog</a></div>

<table >
      <thead>
        <tr>
          <th>Title</th>
          <th>Image</th>
          <th>description</th>
          <th>View Blogs</th>
          <th>Action</th>
      
        </tr>
      <thead>
      <tbody>
        @foreach($blog as $list)
        <tr>
          <td>{{Str::limit($list->title,50)}}</td>
          <td><img width="100px" src='{{asset($list->img)}}'/></td>
          <td>{{Str::limit($list->description,50)}}</td>
          <td><a href="{{url('view-blog')}}/{{$list->id}}">View</a></td>
          <td><button class="btn btn-success">{!! $share !!}</button></td>
          
        </tr>
        @endforeach
      </tbody>
</table>
</body>
      
