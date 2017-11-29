<?php
namespace App\Http\Controllers;

use DB;
use App\Thread;

class ThreadController extends Controller{
	public function index($usercode = '',$pagecode =''){
		$user = DB::table('users')->where('code',$usercode)->first();
		if($user == null){
			return [];
		};
		return Thread::where('userid',$user->id)->where('code',$pagecode)->get();
	}
	
	public function post(Request $request){
	}
}

