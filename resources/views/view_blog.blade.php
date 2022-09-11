<html>
<head>
  <title>view blog</title>

<meta name="url" content="{{url('view-blog')}}/{{$view->id}}">
<link rel="canonical" href="{{url('view-blog')}}/{{$view->id}}">

<meta property="og:title" content="{{$view->title}}" />
<meta property="og:description" content="{{Str::limit(150,$view->description)}}" />

<meta property="og:image" content="{{asset($view->img)}}" />

<meta property="og:site_name" content="Interview" />
<meta property="og:url" content="{{url('view-blog')}}/{{$view->id}}" />
<meta property="og:type" content="website" />
<meta property="og:locale" content="en_US" />
</head>

<body style="text-align:center ">
  <h1>{{$view->title}}</h1><br>
  <img width="80%" src="{{asset($view->img)}}">
  <p>{{$view->description}}</p>
</body>

</html>