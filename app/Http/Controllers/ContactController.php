<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Contact;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use PDF;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();

        return view('contacts.index', compact('contacts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // this is to check whether or not the user is authonized

       // $user = auth()->user();
        
      //  if ($user != null){
        return view('contacts.create');
       //     }
        
    //    else{
            
        // return view('auth.register');
      //     echo "ops you are not authonized" ;
      //  }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required'
        ]);

        $contact = new Contact([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'job_title' => $request->get('job_title'),
            'city' => $request->get('city'),
            'country' => $request->get('country')
        ]);
        $contact->save();
        return redirect('/contacts')->with('success', 'Contact saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($job_title)
    {
       $contact = DB::table('contacts')->where('job_title', $job_title)->first();
         return view('contacts.det' , compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    
    public function pdfview() 
    {  
        // Fetch Desired Data from database
        //$items = DB::table("contacts")->get();
        
        // Get current user
        $user = User::findOrFail(auth()->user()->id);
        
        // Send data to the view using loadView function of PDF facade
        $pdf = PDF::loadView('pdfview', compact('user'));
        
        // If you want to store the generated pdf to the server then you can use the store function
        //$pdf->save(storage_path().'_filename.pdf');
        
        // Finally, you can download the file using download function
        return $pdf->download('pdfview.pdf');

      
    }
    
     
    
}

