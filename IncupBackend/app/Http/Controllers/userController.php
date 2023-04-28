<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Contracts\Container\CircularDependencyException;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class userController extends Controller
{

    public function ides(Request $request ){
      return User::find($request->id)->ideas()->get();
    }

    
        
    public function register(Request $request){
        $fields=$request->validate([
            'name'=>'required|string',
            'CIN'=>'required|string',
            'role'=>'string',
            'number'=>'required|string',
            'email' => 'required|string|unique:users,email',
            'password'=>'required|string|confirmed',
        ]);

  


        $user=User::create([
            'name'=>$fields['name'],
            'CIN'=>$fields['CIN'],
            'number'=>$fields['number'],
            'email'=>$fields['email'],
            'password'=>bcrypt($fields['password']),
            'role'=>$fields['role']
        ]);
        $token=$user->createToken('myapptoken')->plainTextToken;

        $response=[
            'user'=>$user,
            'token'=>$token
        ];
        return response($response ,201);
        
        
    }

    




    public  function purchases(Request $request)
    {
 
        $users = DB::table('users')
            ->join('ideas', 'users.id', '=', 'ideas.user')
            ->join('purchases', 'ideas.id', '=', 'purchases.idea')
            ->where('users.id','=',$request->id)
            ->select(  'purchases.*',)
            ->get();
            //  dd($users);
            return $users;
}



    public function login(Request $request){
        $fields=$request->validate([
            'email' => 'required|string|',
            'password'=>'required|string',
        ]);
       
        if(auth()->attempt($fields)){

        //    dd($user=auth()->user()); 
            $token=auth()->user()->createToken('myToken')->plainTextToken;

            $response=[
                'user'=>auth()->user(),
                'token'=>$token,
            ];
            return response($response ,201);

        }
        else{
            return response([
                         'message'=>'badd creds'

                     ],401);

        }
      


       
    }










    public function edit(Request $request)
    {
        $user=User::find($request->id);
        

    if($request->has('password')){
        $user->update([
            'name' => (request('name')), 
            'email' => (request('email')), 
            'CIN' => (request('CIN')),
            'password' => bcrypt(request('password')),
            'number' => (request('number')),
            ]);
    }else{
        $user->update([
            'name' => (request('name')), 
            'email' => (request('email')), 
            'CIN' => (request('CIN')),
            
            // 'password' => bcrypt(request('password')),
            'number' => (request('number')),
            ]);
    }
        
   
       
        return $user;

    }


    public function logout(Request$request){
        auth()->user()->tokens()->delete();
        return [
            'message'=>'logged out'
        ];
    }


}
