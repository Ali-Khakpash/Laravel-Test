<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Question;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use Redirect;


class QuestionController extends Controller {
    
    public function create(){
    
        $user = auth()->user();
        
        if ($user != null){
        return view('question.create');
            }
        
        else {
            
        // return view('auth.register');
        echo "ops you are not authonized" ;
            
        }
        
}
    
    public function store(Request $request){

               $user = Auth::user();
        
               $question =  new Question();
               $question -> subject= $request->get('subject').'jj';
               $question -> body=$request->get('body');
               $question -> question_type=$request->get('options');
               $question -> user_id = $user->id;
        
               $question->save();
        
               //$request->session()->flash('status', 'Task was successful!');
               //echo $request->session()->get('status');
               //return redirect('/profile')->with('success', 'Contact saved!');
               
        
             Session::flash('message', 'ارسال شد'); 
             Session::flash('alert-class', 'alert-success'); 
              //session()->flash('message', 'ارسال شد'); 
         
             //Session::put('variableName', '$value');
        
             // $request->session()->put('variableName', 'value','1');
            
             
             //return back();
            return redirect('/profile');
             session()->forget('variableName');
    }
    
    
        public function show(){
    
         $questions = Question::all();

         return view('question.show-all-questions', compact('questions'));
          
}
    
    
public function showmyques(){
    
        // Get current user
        $user = Auth::user();
        $user_id = $user->id;
     
        $my_ques = DB::table('questions')->where('user_id', $user_id)->get();
        
        return view('question.show-my-questions', compact('my_ques'));
          
}
    
    


public function search(Request $request){
        $departing = $_GET['departing'];
        $returning = $_GET['returning'];
    

        $ques = \App\Question::where([ 
        ['flight-date-depart', 'LIKE', '%' . $departing . '%'],
        ['flight-date-return', 'LIKE', '%' . $returning . '%'],
        ])->get();
    
       echo strtotime($departing);
       echo $returning;
    
 
    return view('question.search' , compact('ques'));
    
        
}
    
    
public function edit($id)
{
         $question = Question::find($id);

        return view('question.edit', compact('question'));
}
   
public function update(Request $request, $id)
{

        $question = Question::find($id);
    
        $question -> subject= $request->get('subject');
        $question -> body=$request->get('body');
        $question -> question_type=$request->get('options');
    
        $question->save();
  
      return redirect('/shares')->with('success', 'Stock has been updated');
}
    
    
public function delete($id)
{
     $question = Question::find($id);
     $question->delete();

    return back();
}
   
     
       
}
    



    
    
