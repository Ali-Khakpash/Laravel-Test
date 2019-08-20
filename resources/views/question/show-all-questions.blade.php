@include('layouts.header')
@include('flash-message')

<head>
    
<link href="http://www.gamestubbe.ir/mvctest/node_modules/md.bootstrappersiandatetimepicker/dist/jquery.md.bootstrap.datetimepicker.style.css" rel="stylesheet"/>
    
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="http://www.gamestubbe.ir/mvctest/node_modules/md.bootstrappersiandatetimepicker/dist/jquery.md.bootstrap.datetimepicker.js"></script>
    
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




     <form method="GET" action="{{ route('search') }}" 
           style="width:30%;margin-left:10%;display:block;margin-left:auto;margin-right: auto;margin-top: 2%;">
         
          @csrf
         

         <div class="form-group">
              <label for="sel1">گروه پرسش</label>
              <select class="form-control" id="sel1" name="ques-type">
                      <option>علمی</option>
                      <option>ورزشی</option>
                      <option>تخیلی</option>
                      <option>سیاسی</option>
              </select>
          </div>
         
         <div class="form-group">
             <label for="sel1"> تاریخ رفت</label>
             <input type="text" id="inputDate6" class="form-control" placeholder="In Line Date" aria-label="In Line Date"
             aria-describedby="date6" name="departing">
              
         </div>
         
         <div class="form-group">
             <label for="sel1"> تاریخ برگشت</label>
             <input type="text" id="inputDate8" class="form-control" placeholder="In Line Date" aria-label="In Line Date"
             aria-describedby="date6" name="returning">
              
         </div>
         

         <button type="submit" class="btn btn-primary" style="padding-bottom:-10px;">جست و جو</button>
         

    </form>
        





<div class="row">
    <div class="col-lg-12 col-md-12" style="display:block;margin-right:auto;margin-left: auto;">
        
            <div class="col-lg-10 offset-lg-1 col-md-12">
                @foreach($questions as $question)
                 <!--Card-->
                 <div class="card" style="margin-top: 28px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);transition:transform .5s;width:85%;display:block;margin-left:auto;margin-right:auto;">
                     
                    <div class="card-header"> {{$question->subject}} </div> 
                    <div class="card-body">   {{$question->body}} </div>
            
            </div>
                
              @endforeach
        
        </div>
    

</div>
    
    
</div>



<div class="container">
        <h2>Simple</h2>
        <div class="row">
            <div class="col-sm-6">
                <pre>
                
<script>
$(document).ready(function(){
  $('#date1').MdPersianDateTimePicker({
    targetTextSelector: '#inputDate1',
    targetDateSelector: '#inputDate1-1',
    dateFormat: 'yyyy-MM-dd',
    isGregorian: false,
    enableTimePicker: true,
    disableBeforeToday: true,
    disabledDates: [new Date(),
        new Date(2018, 9, 11), 
        new Date(2018, 9, 12), 
        new Date(2018, 9, 13), 
        new Date(2018, 9, 14)],
    disabledDays: [5, 6]
});
    
});

</script>

                </pre>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text cursor-pointer" id="date1">Icon</span>
                    </div>
                    <input type="text" id="inputDate1" class="form-control" placeholder="Persian Calendar Text"
                        aria-label="date1" aria-describedby="date1">
                    <input type="text" id="inputDate1-1" class="form-control" placeholder="Persian Calendar Date"
                        aria-label="date11" aria-describedby="date11">
                </div>
            </div>
            <div class="col-sm-6">
                <pre>
                
<script>
$(document).ready(function(){
$('#date2').MdPersianDateTimePicker({
    targetTextSelector: '#inputDate2',
    selectedDate: new Date('2018/9/30'),
    isGregorian: true
});
      
});
</script>

          </pre>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text cursor-pointer" id="date2">Icon</span>
                    </div>
                    <input type="text" id="inputDate2" class="form-control" placeholder="Gregorian Calendar"
                        aria-label="date2" aria-describedby="date2">
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6">
                <h3>Multiple Months</h3>
            
                <pre>
   <script>
$(document).ready(function(){
$('#date3').MdPersianDateTimePicker({
    targetTextSelector: '#inputDate3',
    monthsToShow: [1, 1]
});
    
});
</script>             
            </pre>
                
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text cursor-pointer" id="date3">Icon</span>
                    </div>
                    <input type="text" id="inputDate3" class="form-control"
                        placeholder="DateTimePicker With Multiple Month" aria-label="date3" aria-describedby="date3"
                        value="1397/02/01">
                </div>
            </div>
            <div class="col-sm-6">
                <h3>Range Selector</h3>
                <pre>
                
  <script>
$(document).ready(function(){
$('#date3-1').MdPersianDateTimePicker({
    targetTextSelector: '#inputDate3-1',
    monthsToShow: [1, 1],
    rangeSelector: true
});
     
});
</script>    

           </pre>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text cursor-pointer" id="date3-1">Icon</span>
                    </div>
                    <input type="text" id="inputDate3-1" class="form-control"
                        placeholder="DateTimePicker Range Selector With Multiple Months" aria-label="date3-1"
                        aria-describedby="date3-1">
                </div>
            </div>
        </div>
        <hr>
        <h3>Range - fromDate, toDate</h3>
        <div class="row">
            <div class="col-sm-6">
                <pre>
  <script>
$(document).ready(function(){
$('#date4').MdPersianDateTimePicker({
    targetTextSelector: '#inputDate4',
    fromDate: true,
    enableTimePicker: true,
    groupId: 'rangeSelector1',
    dateFormat: 'yyyy-MM-dd HH:mm:ss',
    textFormat: 'yyyy-MM-dd HH:mm:ss',
});
     
});
</script>              
                
           </pre>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text cursor-pointer" id="date4">Icon</span>
                    </div>
                    <input type="text" id="inputDate4" class="form-control" placeholder="From Date" aria-label="date4"
                        aria-describedby="date4">
                </div>
            </div>
            <div class="col-sm-6">
                <pre>
                
                <script>
$(document).ready(function(){
$('#date5').MdPersianDateTimePicker({
    targetTextSelector: '#inputDate5',
    toDate: true,
    groupId: 'rangeSelector1',
    placement: 'top',
    enableTimePicker: true,
    dateFormat: 'yyyy-MM-dd HH:mm:ss',
    textFormat: 'yyyy-MM-dd HH:mm:ss',
});
});
</script>

                </pre>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text cursor-pointer" id="date5">Icon</span>
                    </div>
                    <input type="text" id="inputDate5" class="form-control" placeholder="To Date" aria-label="date5"
                        aria-describedby="date5">
                </div>
            </div>
        </div>
        <hr>
        <h3>InLine</h3>
        <div class="row">
            <div class="col-sm-6">
                <pre>
                
 <script>
$(document).ready(function(){
$('#date6').MdPersianDateTimePicker({
    targetTextSelector: '#inputDate6',
    targetDateSelector: '#inputDate7',
    inLine: true,
    enableTimePicker: false,
    fromDate: true,
    groupId: 'date6-7-range'
});
       
});
</script> 

         </pre>
                <div id="date6"></div>
                <input type="text" id="inputDate6" class="form-control" placeholder="In Line Date" aria-label="In Line Date"
                    aria-describedby="date6">
                <input type="text" id="inputDate7" class="form-control" placeholder="In Line Date" aria-label="In Line Date"
                    aria-describedby="date6">
            </div>
            <div class="col-sm-6">
                <pre>
                
                <script>
$(document).ready(function(){
$('#date7').MdPersianDateTimePicker({
    targetTextSelector: '#inputDate8',
    targetDateSelector: '#inputDate9',
    inLine: true,
    enableTimePicker: false,
    toDate: true,
    groupId: 'date6-7-range'
});
        
});
</script>

        </pre>
                <div id="date7"></div>
                <input type="text" id="inputDate8" class="form-control" placeholder="In Line Date" aria-label="In Line Date"
                    aria-describedby="In Line Date">
                <input type="text" id="inputDate9" class="form-control" placeholder="In Line Date" aria-label="In Line Date"
                    aria-describedby="In Line Date">
            </div>
        </div>
    </div>

    <!-- <script src="../src/jquery.md.bootstrap.datetimepicker.js" type="text/javascript"></script> -->
    <script src="../dist/jquery.md.bootstrap.datetimepicker.js" type="text/javascript"></script>

    <script type="text/javascript">
        $('#date1').MdPersianDateTimePicker({
            targetTextSelector: '#inputDate1',
            targetDateSelector: '#inputDate1-1',
            dateFormat: 'yyyy-MM-dd',
            isGregorian: false,
            enableTimePicker: true,
            disableBeforeToday: true,
            disabledDates: [new Date(), new Date(2018, 9, 11), new Date(2018, 9, 12), new Date(2018, 9, 13),
                new Date(2018, 9, 14)
            ],
            disabledDays: [5, 6]
        });

        $('#date2').MdPersianDateTimePicker({
            targetTextSelector: '#inputDate2',
            selectedDate: new Date('2018/9/30'),
            isGregorian: true
        });

        $('#date3').MdPersianDateTimePicker({
            targetTextSelector: '#inputDate3',
            monthsToShow: [1, 1],
        });
        $('#date3-1').MdPersianDateTimePicker({
            targetTextSelector: '#inputDate3-1',
            monthsToShow: [1, 1],
            rangeSelector: true
        });

        $('#date4').MdPersianDateTimePicker({
            targetTextSelector: '#inputDate4',
            fromDate: true,
            enableTimePicker: true,
            groupId: 'rangeSelector1',
            dateFormat: 'yyyy-MM-dd HH:mm:ss',
            textFormat: 'yyyy-MM-dd HH:mm:ss',
        });
        $('#date5').MdPersianDateTimePicker({
            targetTextSelector: '#inputDate5',
            toDate: true,
            groupId: 'rangeSelector1',
            placement: 'top',
            enableTimePicker: true,
            dateFormat: 'yyyy-MM-dd HH:mm:ss',
            textFormat: 'yyyy-MM-dd HH:mm:ss',
        });

        $('#date7').MdPersianDateTimePicker({
            targetTextSelector: '#inputDate8',
            targetDateSelector: '#inputDate9',
            inLine: true,
            enableTimePicker: false,
            toDate: true,
            groupId: 'date6-7-range'
        });

        $('#date6').MdPersianDateTimePicker({
            targetTextSelector: '#inputDate6',
            targetDateSelector: '#inputDate7',
            inLine: true,
            enableTimePicker: false,
            fromDate: true,
            groupId: 'date6-7-range'
        });
        
    </script>

    <br><br>