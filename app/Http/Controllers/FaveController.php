<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fave;

class FaveController extends Controller
{
    //

    public function store(Request $request,$talent,$user)
    {
        $fave = new Fave;
        $fave->user_id = $user;
        $fave->talent_id = $talent;
        $fave->save();
        return redirect('/');
        
    }

    public function remove(Request $request,$id,$user)
    {
        $fave = Fave::where('talent_id',$id)->where('user_id',$user)->delete();
        
        return redirect('/');
        
        
    }
}
