<?php

namespace App\Http\Controllers;
use App\Models\edit_profile;
use App\Models\User;



use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class profiletcontroller extends Controller
{
    // public function profile(){
    //    return view ('admin.profile');
    //}
    
   // public function setting(){
    //    return view ('admin.setting');
   // }
   public function accountSetting(Request $req){
    return view('admin.setting');
}

   public function editprofile()
   {
       return view('admin/edit-profile');
   }

   public function editprofilesubmit(Request $req){
       
       
       $count=edit_profile::where('user_id',Auth::user()->id)->count();
       if ($count!=0){
       edit_profile::where('user_id',Auth::user()->id)->update([  
         
           "tradename"=>$req['name'],
           "email" =>$req['email'],
           'Gst_no' => $req['gst'],
           "office_address"=>$req['address'],
           "state" =>$req['state'],
           "pin_code"=>$req['pin_code'],
           "number"=>$req['phone'],
           "pan_no"=>$req['pan'],
           "AUTHORISED"=>$req['authorised'],
           "bank_name"=>$req['bank_name'],
           "IFSC" =>$req['bank_ifsc'],
           "BankAccount"=>$req['bank_account'],
           
   ]);
}
   else{
       $edit_profile = new edit_profile;
       $edit_profile->tradename =$req['name'];
       $edit_profile->Gst_no =$req['gst'];
       $edit_profile->office_address =$req['address'];
       $edit_profile->state =$req['state'];
       $edit_profile->pin_code =$req['pin_code'];
       $edit_profile->number=$req['mobile'];
       $edit_profile->pan_no=$req['pan'];
       $edit_profile->AUTHORISED=$req['authorised'];
       $edit_profile->bank_name =$req['bank_name'];
       $edit_profile->IFSC =$req['bank_ifsc'];
       $edit_profile->BankAccount=$req['bank_account'];
       
       $edit_profile->user_id=Auth::user()->id;
       $edit_profile->save();
   }
       return redirect()->route('profile');
   }

   public function profile(Request $req){
    $user=User::where('id',Auth::user()->id )->first();
    $user_profile=edit_profile::where('user_id',Auth::user()->id)->first();
    // echo "<pre>";
    // print_r($user_profile);
    return view('admin/profile',compact('user','user_profile'));
}

}
