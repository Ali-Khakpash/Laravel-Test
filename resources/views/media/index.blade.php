@extends('base')


<form method="POST" action="{{ route('upload.media') }}" role="form" enctype="multipart/form-data">
     @csrf
 <div class="form-group">    
      <label for="profile_image">Profile Image:</label>
      <input id="profile_image" type="file" 
             class="form-control @error('profile_image')  @enderror" 
             name="profile_image" required>
 </div>
    
    @error('profile_image')
    <div class="alert alert-danger">{{ $message }}</div>
   @enderror
    
    

 <div class="form-group">    
      <label for="profile_video">Profile Videp:</label>
      <input id="profile_video" type="file" 
             class="form-control @error('profile_video')  @enderror" 
             name="profile_video" required>
 </div>
    
   @error('profile_video')
    <div class="alert alert-danger" style="float: right;direction: rtl">
        {{ $message }}
    </div>
   @enderror


<div class="form-group">

   <button type="submit" class="btn btn-primary">
       Update Profile image & video
   </button>
    
</div>
    
    
<a href="/mvctest/downloadmedia" class="btn btn-success" role="button">
      Download The File 
</a>
    
</form>
    

