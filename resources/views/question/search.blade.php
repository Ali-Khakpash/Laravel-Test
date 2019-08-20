@include('layouts.header')



<h2 class="text-center" style="border-bottom:1px solid #EEEEEE;"> نتایج جست و جو  </h2>

<div class="row">
    <div class="col-lg-12 col-md-12" style="display:block;margin-right:auto;margin-left: auto;">
        
            <div class="col-lg-10 offset-lg-1 col-md-12">
                 @foreach($ques as $question)
                 <!--Card-->
                 <div class="card" style="margin-top: 28px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);transition:transform .5s;width:85%;display:block;margin-left:auto;margin-right:auto;">
                     
                    <div class="card-header"> {{$question->subject}} </div> 
                    <div class="card-body">  {{$question->body}}  </div>
                
            </div>
                
              @endforeach
        
        </div>
    

</div>
    
@if($errors->any())
<div class="ml-auto display-4 text-right mr-4" id="error-box">
    <!-- Display errors here -->
    یافت نشد
</div>
@endif
    
    
</div>
    
    