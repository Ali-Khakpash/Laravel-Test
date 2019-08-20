<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Storage;
use Response;


class UploadMediaController extends Controller
{



 public function index()
    {

        return view('media.index');
    } 
    
    
    public function post(Request $request)
    {

       $validator = Validator::make($request->all(), [
            'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'profile_video' => 'required|mimes:mp4,mov,ogg,qt|max:200000',
        ]);
        
      if ($validator->fails()) {
            return redirect('/uploadmedia')
                        ->withErrors($validator)
                        ->withInput();     
        }
 
        // Get current user
        $user = User::findOrFail(auth()->user()->id);

        // Check if a profile image has been uploaded
        if ($request->has('profile_image')) {
            // Get image file
            $image = $request->file('profile_image');
            // Make a image name based on user name and current timestamp
            $name = $user.'_'.time();
            // Define folder path
            $folder = '/uploads/images/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
           // $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            $filename = 'profile-photo-' . time() . '.' . 
            $request->file('profile_image')->getClientOriginalExtension();
            
           $path = $request->file('profile_image')
               ->storeAs('upload/image',$filename);
            // Set user profile image path in database to filePath
            $user->profile_image = 'http://www.gamestubbe.ir/mvctest/storage/app/'.$path;
        }
        
        
         if ($request->has('profile_video')) {
            // Get image file
            $video = $request->file('profile_video');
            // Make a image name based on user name and current timestamp
            $name = $user.'_'.time();
            // Define folder path
            $folder = '/uploads/videos/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
           // $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            $filename = 'profile-video-' . time() . '.' . 
            $request->file('profile_video')->getClientOriginalExtension();
            
           $path = $request->file('profile_video')
               ->storeAs('upload/videos',$filename);
            // Set user profile image path in database to filePath
            $user->profile_video = 'http://www.gamestubbe.ir/mvctest/storage/app/'.$path;
        }
        
        
        

        // Persist user record to database
        $user->save();
        return redirect('/uploadmedia')->with('success', 'Profile Image updated successfully.');
    }
    
    
    
 public function download(){
     
      $file= storage_path('app/upload/videos/profile-video-1559188587.pdf');
     
         $headers = array(
           'Content-Type: application/pdf',
            );
     
     return Response::download($file, 'filename.pdf');
     
 }

}

