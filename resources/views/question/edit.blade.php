@include('layouts.header')


<body>
        
     <form method="post" action="{{ route('update',$question->id)}}" 
           style="width:30%;margin-left:10%;display:block;margin-left:auto;margin-right: auto;margin-top: 2%;">
          @csrf
         @method('PATCH')
          <div class="form-group">    
              <label for="first_name">عنوان پرسش</label>
              <input type="text" class="form-control" name="subject" 
                     value={{ $question->subject}} />
                     
                     
              
          </div>

          <div class="form-group">
              <label for="last_name">متن پرسش</label>
              <textarea class="form-control" rows="12" id="comment" 
                        name="body"
                        value={{$question->subject}}
                        >
              </textarea>
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
         
         <button type="submit" class="btn btn-primary">ویرایش</button>
         
    </form>
    
    

    
    
</body>