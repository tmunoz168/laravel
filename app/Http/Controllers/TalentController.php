<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Talent;
use App\Fave;

class TalentController extends Controller
{
    public function view(Request $request,$id)
    {
        $talent = Talent::findOrFail($id);
        $favenumber = Fave::where('talent_id',$id)->count();
        $userid = 1;
        $favorited = Fave::where('user_id',$userid)->get();
        $isfave = 'false';
       foreach($favorited as $x)
       {
            if ($x->talent_id == $id ) {
                $isfave = 'true';
            break;
            }
       }
       $favenumber = [$favenumber,$isfave];
        return view('view',['talent'=>$talent],['faved'=>$favenumber],['isfave'=>$isfave]);
    }
}
