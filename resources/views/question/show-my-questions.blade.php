

@include('layouts.header')

<head> 
<style>
    .card-header{
       margin-left:0px;
       padding-top:5px;
       padding-bottom:5px;
       border-bottom:1px solid #EEEEEE; 
    } 
    
    .card-body{
        margin-top:15px;
        margin-left:0px;
    }
    
</style>


</head>



<div class="row">
    <div class="col-lg-12 col-md-12" style="display:block;margin-right:auto;margin-left: auto;">
        
            <div class="col-lg-10 offset-lg-1 col-md-12">
                @foreach($my_ques as $question)
                 <!--Card-->
                 <div class="card" style="margin-top: 28px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);transition:transform .5s;width:85%;display:block;margin-left:auto;margin-right:auto;">
                     
                    <div class="card-header"> {{$question->subject}} </div> 
                    <div class="card-body">   
                        {{$question->body}}     
                        
                 <a href="{{ route('edit',$question->id)}}" class="btn btn-primary float-right">ویرایش</a>
                        
                 <!-- Modal remove posts scripts-->     
                 <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$question->id}})" 
                 data-target="#DeleteModal" class="btn btn-xs btn-danger float-right mr-2"><i class="fa fa-trash"></i> پاک کردن </a>       
                        
<div id="DeleteModal" class="modal fade text-danger" role="dialog">
    <div class="modal-dialog ">
        
     <!-- Modal content-->
      <form action="" id="deleteForm" method="post">
         <div class="modal-content">
             <div class="modal-header bg-info">
                 <h4 class="modal-title text-left" style="text-align:left;">
                     تایید پاک کردن
                 </h4>
                <button type="button" class="close float-right" 
                         data-dismiss="modal">&times;</button>
             </div>
             <div class="modal-body">
                  @csrf
                  @method('DELETE')
                 <p class="text-center">می خواهید پست را پاک کنید ؟</p>
             </div>
             <div class="modal-footer justify-content-center">
        
                     <button type="button" class="btn btn-success" data-dismiss="modal" style="float: left;">خیر</button>
                     <button type="submit" name="" class="btn btn-danger float-right" data-dismiss="modal" onclick="formSubmit()">بله</button>
                 
             </div>
             
         </div>
        </form>
  
        
   </div>
  </div>
                    
                        
       
                     
                </div>
            
            </div>
                
              @endforeach
        
        </div>
    
    
  
    
    
</div>
    
    
</div>
    

<script type="text/javascript">
     function deleteData(id)
     {
         var id = id;
         var url = '{{ route("delete", ":id") }}';
         url = url.replace(':id', id);
         $("#deleteForm").attr('action', url);
     }

     function formSubmit()
     {
         $("#deleteForm").submit();
     }
  </script>
    



