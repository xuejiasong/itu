<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        $credentials = $this->validate($request, [
            'name' => 'required|max:10',
            'password' => 'required|min:6'
        ]);

        if (Auth::attempt($credentials, $request->has('remember'))) {
             session(['user'=> Auth::user()]);
            return redirect()->route('root');
        } else {
            session()->flash('danger', '很抱歉，您的邮箱和密码不匹配');
            return redirect()->back()->withInput();
        }

    }

    public function destroy()
    {
        Auth::logout();
        session()->forget('user');
        // session()->flash('success', '您已成功退出！');
        return redirect('login');
    }
}
