<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title></title>

    <!-- Scripts -->
    <!-- Fonts -->
        <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
    
</head>
    
    
<body>
        
     <form method="post" action="{{ route('store-question') }}" 
           style="width:30%;margin-left:10%;display:block;margin-left:auto;margin-right: auto;margin-top: 2%;">
         
          @csrf
          <div class="form-group">    
              <label for="first_name">عنوان پرسش</label>
              <input type="text" class="form-control" name="subject"/>
          </div>

          <div class="form-group">
              <label for="last_name">متن پرسش</label>
              <textarea class="form-control" rows="12" id="comment" 
                        name="body"></textarea>
          </div>
                         
         
         <div class="form-group">
              <label for="sel1">گروه پرسش</label>
              <select class="form-control" id="sel1" name="options">
                      <option>علمی</option>
                      <option>ورزشی</option>
                      <option>تخیلی</option>
                      <option>سیاسی</option>
              </select>
          </div>
         
         <button type="submit" class="btn btn-primary">بفرست</button>
         
    </form>
    
    
@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">
    {{ Session::get('message') }}
</p>
@endif
    
@if(Session::has('variableName'))
<p class="alert info">
    {{ Session::get('variableName') }}
</p>
@endif
        
    
    
</body>
    
    
    
</html>
    