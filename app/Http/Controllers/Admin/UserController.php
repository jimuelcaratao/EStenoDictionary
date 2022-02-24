<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {

        $tableUsers = User::all();

        if ($tableUsers->isEmpty()) {
            $users = User::oldest()->paginate();
        }

        if ($tableUsers->isNotEmpty()) {
            // search validation
            $search = User::where(request()->search_col ?? 'name', 'like', '%' . request()->search . '%')
                ->first();

            if ($search === null) {
                return redirect('users')->with('info', 'No "' . request()->search . '" found in the database.');
            }

            if ($search != null) {
                // default returning
                $users = User::where(request()->search_col ?? 'name', 'like', '%' . request()->search . '%')
                    ->oldest()
                    ->paginate(10);
            }
        }

        return view('pages.admin.users', [
            'users' =>   $users,
        ]);
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:users',
            'is_admin' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return Redirect::route('users')
                ->with('toast_error', $validator->messages()->all())
                ->withInput();
        }


        User::firstOrCreate([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'is_admin' => $request->input('is_admin'),
            'password' => Hash::make($request->input('password')),
        ]);

        return Redirect::route('users')->withSuccess('User :' . $request->input('name') . '. Created Successfully!');
    }

    public function update(Request $request)
    {
        // dd($request->all());

        $user = User::where('email', Auth::user()->email)->first();

        if ($user->password == null) {
            return Redirect::back()->with('info', 'Opps you have currently no password.');
        }

        if (Hash::check($request->input('password'), $user->password)) {

            $get_user = User::where('id', $request->input('id'))
                ->update([
                    'is_admin' => $request->input('is_admin'),
                ]);

            return Redirect::back()->with('success', 'User Successfully updated.');
        } else {
            return Redirect::back()->with('info', 'Sorry Wrong credentials.');
        }
    }

    public function ban(Request $request)
    {

        // dd($request->all());
        $user = User::where('email', Auth::user()->email)->first();

        if ($user->password == null) {
            return Redirect::back()->with('info', 'Opps you have currently no password.');
        }

        if (Hash::check($request->input('password'), $user->password)) {

            $get_user = User::where('id', $request->input('id'))->first();

            if ($get_user->is_banned == null) {

                $get_user->update([
                    'is_banned' => Carbon::now(),
                ]);
                return Redirect::back()->with('success', 'User account is deactivated now.');
            }
            if ($get_user->is_banned != null) {
                $get_user->update([
                    'is_banned' => null,
                ]);
                return Redirect::back()->with('success', 'User account is activated now.');
            }
        } else {
            return Redirect::back()->with('info', 'Sorry Wrong credentials.');
        }
    }
}
