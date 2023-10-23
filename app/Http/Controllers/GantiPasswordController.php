<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class GantiPasswordController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $validator =  Validator::make($request->all(), [
            'old_password' => 'required',
            'password' => 'required|string|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect(route('member.dashboard'))->with('error',  json_encode($validator->errors()));
        }
        $user = Member::find(auth('member')->user()->id);
        if (!Hash::check($request->input('old_password'), $user->password)) return redirect(route('member.dashboard'))->with('error', 'Password Lama Salah');
        $user->password = $request->input('password');
        $user->save();
        return redirect(route('member.dashboard'))->with('status', 'OK');
    }
}
