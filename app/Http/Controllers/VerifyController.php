<?php

namespace allov1\Http\Controllers;

use Illuminate\Http\Request;
use allov1\User;

class VerifyController extends Controller
{
    public function getVerify()
    {
      return view('verify');
    }

    public function postVerify(Request $request)
    {
      if ($user=User::where('code',$request->code)->first()) {
        $user->active=1;
        $user->code=null;
        $user->save();

        return redirect()->route('login')->withMessage('Your Account is active!');
      }else {
        return back()->withMessage('code de vérification est invalid ! essayez de nouveau !');
      }
    }
}
