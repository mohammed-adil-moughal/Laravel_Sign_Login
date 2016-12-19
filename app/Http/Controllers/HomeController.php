<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Mail;
use App\User;
use App\Organisation;
use App\Superadmin;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function Adduser()
    {
        return view('admin.adduser');
        
    }
    public function Regadmin(Request $request)
    {
       $user=new User();
       $user->fill($request->all());
       $user->admin=1;
       $user->save();
       $repo = Password::getRepository();
       $token = $repo->create($user);
       Mail::send('auth.emails.existing',['token' => $token, 'user'=> $user ], function($message) use ($request)
                {
                    $message->to($request->email, $request->name)->subject('Welcome!');
                });
   
    return Redirect::back();
        
    }
    
    public function Allusers()
    {
        $users=User::whereNotNull('password')->where('admin',1)->get();
        return view('admin.allusers')->with('users',$users);
        
    }
    public function Addorganisation()
    {
        return view('admin.addorganisation');
    }
    public function Regorganisation(Request $request)
    {
       $organisation=new Organisation();
        
       $organisation->fill($request->all());
       $organisation->save();
                return Redirect::back();
   }
   public function Addsuperadmin()
   {
       $organisation=  Organisation::all();
       return view('admin.addsuperadmin')->with('organisation',$organisation);
   }
   public function Regsuperadmin(Request $request)
   {
        $user=new User();
       $user->fill($request->all());
       $user->admin=2;
       $user->save();
       $repo = Password::getRepository();
       $token = $repo->create($user);
       Mail::send('auth.emails.existing',['token' => $token, 'user'=> $user ], function($message) use ($request)
                {
                    $message->to($request->email, $request->name)->subject('Welcome!');
                });
   
    return Redirect::back();
   }
   public function Allorganisations()
   {
        $organisation=  Organisation::all();
       return view('admin.allorganisations')->with('organisation',$organisation);
   }
   public function Getadmins($id)
   {
       $admins=  User::where('Organisation',$id)->where('admin',2)->get();
       Return view('admin.allsuperadmins')->with('admins',$admins);
   }
}
