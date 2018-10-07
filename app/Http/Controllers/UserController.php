<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use \App\Medicine;

class UserController extends Controller
{
   /* public function add(Request $request)
    {
        $name = Input::post('name');
        $email = Input::post('email');
        $mobile = Input::post('mobile');
        $password = Input::post('password');
        return "Email: " . $email . " and Password: " . $password."Name:".$name. "Mobile:".$mobile;

    }*/

   public function insert(Request $request)
    {
        $user = new User;
        $user->FUser_name= $request->input('FUser_name');
        $user->LUser_name = $request->input('LUser_name');
        $user->User_Email = $request->input('User_Email');
        $user->User_Mobile = $request->input('User_Mobile');
        $user->User_Password = ($request->input('User_Password'));
        $user->User_Age = $request->input('User_Age');
        $user->User_Address = $request->input('User_Address');

        if ($user->save()) {
            return response()->json(['status' => 'success', 'Data' => $user]);
        } else {
            return response()->json(['status' => 'failed', 'Data' => $user]);

        }
    }

        public function getAll()
    {
        $user= User::get();
        if($user!=null)
        {
            return response()->json(['status' => 'success', 'Data' => $user]);
        }
        else
        {
            return response()->json(['status' => 'failed', 'Data' => $user]);
        }
    }



    public function getsome()
    {
        //$user=new User;
        $user= User::get(['id', ]);
        return $user;
       $name =  $user->fullName;

        if($user!=null)
        {
            return response()->json([
                'name' => $name,
                'User_Address' => $User_Address,
                'User_Mobile'=>$User_Mobile,
                'User_Email'=>$User_Email
            ]);

        }
        else
        {
            return response()->json(['status' => 'failed', 'Data' => $user]);
        }
    }


    public function getById($id)
    {
        $user= User::where('id',$id)->first();
        if($user!=null)
        {
            return response()->json(['status' => 'success', 'Data' => $user]);
        }
        else
        {
            return response()->json(['status' => 'failed', 'Data' => $user]);
        }
    }

}
