<html>
<head> 
<title>Test </title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

</head>

<body>



<div> 


<div class="d-flex justify-content-center">
<div class="col-md-5">
    <form action="action('Modules\Movies\Http\Controllers\MoviesController@create')" method="post">

        {{ csrf_field() }}

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Movie Title</label>
      <input type="text" class="form-control" name="movie_title" aria-describedby="emailHelp">
      
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">movie_img_url</label>
      <input type="text" class="form-control" name="movie_img_url">
    </div>
    <div class="mb-3 ">
        <label class="form-check-label" class="form-label">Movie Show time</label>

      <input type="text" class="form-control" name="movie_show_time">
    </div>
    <div class="mb-3 ">
        <label class="form-check-label" class="form-label">Movie date</label>
        <input type="text" class="form-control" name="movie_date">
        
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>
</div>






</body>
</html>