<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class Newprofilecontroller extends Controller
{
    //
    
    public function gotopo($name)
    {
    $alldata=DB::table('profile')->where('Profile_name',$name)->first();
     //$friend=DB::table('friends')->where('Profile_id',1)->get();
     $friend=DB::table('friends')->where('Profile_id',1)->where('Friend_id',$name)->first();
        return view('profile')->with('data',$alldata)->with('fri',$friend);
    }
    public function sendreq($name)
    {
        $alldata=DB::table('profile')->where('Profile_name',$name)->first();

    DB::table('friendrequest_recv')->insert(
    ['Profile_id' => $alldata->Profile_id, 'Sender_id' => 1,'Req_status'=>0,'Sender_name'=>'Ishita'] //change koro
        );
    //Session::flash('message', 'Friend Request sent successfully!'); 
        return view('frndmsg')->with('msg','Friend Request sent successfully!');
        
    }
    public function seereq($id)
    {
        $alldata=DB::table('friendrequest_recv')->where('Profile_id',$id)->where('Req_status',0)->get();
        return view('seefreq')->with('data',$alldata);

    
        
    }
    public function showfr()
    {
        $alldata=DB::table('friends')->where('Profile_id',1)->get();
        return view('network')->with('data',$alldata);

    
        
    }

    public function acceptreq($ids,$idr,$sname)
    {
        DB::table('friends')->insert(
    ['Profile_id' => $ids, 'Friend_id' => $idr,'Friend_name'=> $sname] //change koro
        );
         DB::table('friends')->insert(
    ['Profile_id' => $idr, 'Friend_id' => $ids,'Friend_name'=> $sname] //change koro
        );
         //$alldata=DB::table('friendrequest_recv')->where('Profile_id',$idr)->where('Sender_id',$ids)->first();
         DB::table('friendrequest_recv')
         ->where('Profile_id',$idr)
         ->where('Sender_id',$ids)
            ->update(['Req_status' => 1]);
        return view('index');

    
        
    }

    public function applyjob($rid,$pid)
    {
        DB::table('application')->insert(
    ['Profile_id' => $rid, 'Post_id' => $pid] //change koro
        );
         
         
        return view('jobapply');

    
        
    }

    public function rejectreq($ids,$idr)
    {
        DB::table('friendrequest_recv')
         ->where('Profile_id',$idr)
         ->where('Sender_id',$ids)
            ->update(['Req_status' => 1]);
        return view('index');

    
        
    }
}