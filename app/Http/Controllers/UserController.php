<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    
    function getUser()
    {
        //return "Kabir Sheth";
        return view('users');
    }


    function users()
    {
                                            // Where Query
        // $users = DB::table('users')->where('mobilenumber','9409499129')->get();
                                            // Get First Data Query
        // $users = DB::table('users')->first();
        // $users = [$users];
                                            // Select * FROM tablename Query
         $users = DB::table('users')->get();

                                            // Insert Query
        // $users = DB::table('users')->insert([
        //     'username' => 'Riddhi',
        //     'email' => 'riddhidev20@gmail.com',
        //     'mobilenumber' => '9409499129'
        // ]);
        // if($users)
        // {
        //     return "Data Inserted";
        // }
        // else
        // {
        //     return "Data not Inserted";
        // }
                                                // Update Query
        // $users = DB::table('users')->where('username','Kabir')->update(['mobilenumber' => '9409499129']);
        // if($users)
        // {
        //     return "Data Updated";
        // }
        // else
        // {
        //     return "Data not Updated";
        // }
                                                // Delete Query
        // $users = DB::table('users')->where('username','Dev Mehta')->delete();
        // if($users)
        // {
        //     return "Data Deleted";
        // }
        // else
        // {
        //     return "Data not Deleted";
        // }
         return view('users',['users'=>$users]);
    }


    function getUserName($name)
    {
        // echo "This is ". $name;
        return view('getuser', ['name'=>$name]); 
    }

    function adminLogin()
    {
        if(View :: exists('admin.login'))
        {
            return view('admin.login');
        }
        else
        {
            echo "No Admin Page Found!!";
        }
        // if(View :: exists('admin.signin'))
        // {
        //     return view('admin.signin');
        // }
        // else
        // {
        //     echo "No Admin Page Found!!";
        // }
        
    }

    function userHome()
    {
        $name = "Kabir";
        $users = ["Bapa" ,"Kabir", "Kriti"];
        return view('home', ["user"=>$name, "users"=>$users]);
    }

    function userAbout($about)
    {
        return view('newabout', ['about'=>$about]);
    }

    function addUser(Request $request)
    {
        //return $request;
        $request->validate([
            'username'=>'required | min:3 | max:10',
            'email'=>'required | email',
            'city'=>'required | min:3 | max:20 | uppercase',
            'skills'=>'required',
            'gender'=>'required',
            'ucity'=>'required',
            'age'=>'required'
        ],
    [
        'username.required'=>'Username cannot be Empty!',
        'username.min'=>'Username Minimum Character Should be 3',
        'username.max'=>'Username Maximum Character Should be less than 10',
        'email.email'=>'This Email is not Valid',
        'city.uppercase'=>'Enter City Name in UpperCase/ Capital'
    ]);
        echo "User Name is :- $request->username";
        echo "<br>";
        echo "User Email ID is :- $request->email";
        echo "<br>";
        echo "User City is :- $request->city";
        echo "<br>";
        print_r($request->skills);
        echo "<br>";
        echo "User Gender is :- $request->gender";
        echo "<br>";
        echo "User City is :- $request->ucity";
        echo "<br>";
        echo "User Age is :- $request->age";
    }

    function getApiUser()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/users/1');
        $response = $response->body();
        return view('APIUsers', ['data'=>json_decode($response)]);
    }

}
