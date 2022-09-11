<link rel="stylesheet" href="{{asset('style_from.css')}}">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

<form method="post" action="submit-blog" enctype="multipart/form-data">
  <h1>Insert Blog</h1>
  @csrf
 
  
  <div class="row">
    
    <input type="text" name="title" id="title" required/>
    <label for="title">Title</label>
    @error('title') <p>{{$message}}</p> @enderror
  </div>
  
  <div class="row">
    <input type="file" name="img" id="img" required />

    @error('img') <p>{{$message}}</p> @enderror
  </div>
  
  <div class="row">
    <textarea name="description" id="description" required></textarea>
    <label for="description">Description</label>
    @error('description') <p>{{$message}}</p> @enderror
  </div>

  <!-- <div class="row">
    <input type="radio" name="fancy-radio" id="fancy-radio-1"/>
    <label for="fancy-radio-1">Radio</label>
    
    <input type="radio" name="fancy-radio" id="fancy-radio-2"/>
    <label for="fancy-radio-2">Radio</label>
  </div> -->
  
  <button type="submit" tabindex="0">Submit</button>
</form>

