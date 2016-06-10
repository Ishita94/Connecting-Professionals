public function postSignIn(Request $request){
	    //return $request['password'];
        if(Auth::attempt(['name' => $request['username'],'password' => $request['password']])) {
            //return "SUCCESS";
            //$converted_res = (Auth::Guest()) ? 'true' : 'false';
            //return $converted_res;
            //$converted_res = (Auth::user()->name);
            //echo $converted_res;
            return redirect('/');
        }
        else{
		    return 'wrong creds';
	    }
        //echo $request['username'];
        //echo $request['password'];
        //return "Failed";
        return redirect()->back();
    }