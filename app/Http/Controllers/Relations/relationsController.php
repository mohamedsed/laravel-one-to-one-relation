<?php

namespace App\Http\Controllers\Relations;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\relations\Phone;
use App\Http\Controllers\Controller;

class relationsController extends Controller
{
    public function  hasOne() {
        $user = User::with(['phone' =>function($q){
            $q->select('code' , 'user_id' , 'phone');
        }])->find(1);
         return response()->json($user);

    }
    public function phoneUser(){



         $phone = Phone::with(['user'=>function($q){
                 $q->select('id','name');
             }])->find(1);
            // $phone->makeVisible(['user_id']);
            // $phone->makeHidden(['code']);
             return $phone;
        }
        public function userHasPhone(){
             $users =   User::whereHas('phone')->get();
             return response()->json($users);
        }
        public function userdonthavePhone(){
            $users =   User::whereDoesntHave('phone')->get();
           return response()->json($users);
        }
}
