<?php

namespace App\Http\Controllers;

use App\User;
use App\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    private $pageName = 'profile';

    public function welcome(Request $request)
    {
        $guest = new UserProfile();
        if($request->g && $request->h)
        {
            $guest_get = UserProfile::where('user_id', $request->g)->where('first_name',Crypt::decrypt($request->h))->get();
            $guest = UserProfile::find($guest_get[0]->id);
        }
        return view('welcome', compact('guest'));
    }

    public function confirm(Request $request)
    {
        $guest = UserProfile::find($request->id)->update(['status'=>1]);
        if($request->field0_value == "yes")
        {
            $guest = UserProfile::find($request->id);
            $guest->status = 1;
            $guest->save();
            for($x=3; $x<=($guest->age + 2); $x++) {
                $param = "field".$x.'_value';
                if($request->$param)
                {
                    $user = User::create([
                        'username' => 'asda']);
                    $profile = new UserProfile([
                        'first_name' => $request->$param,
                        'last_name' => $guest->first_name.' '.$guest->last_name. ' (add-on)',
                        'phone' => '000000',
                        'age' => 0,
                        'gender' => 'male',
                        'fb_profile' => null,
                        'status' => 1
                    ]);

                    $user->profile()->save($profile);
                }
            }
        }
        else
        {
            $guest = UserProfile::find($request->id)->update(['status'=>2]);
        }
        return response([
            "confirm_status"  => $request->field0_value
        ], 200);
    }

    public function edit()
    {
        return view('profile.edit', [
            'pageName' => $this->pageName
        ]);
    }

    /**
     * Update user password
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function updatePassword(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|min:6|confirmed',
        ]);

        $user           = Auth::user();
        $user->password = bcrypt($request->input('password'));
        $user->save();

        Auth::logout();

        flash('Password was changed, Please re-login.', 'success');

        return redirect('/login');
    }

    /**
     * Update user profile
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function updateProfile(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|max:50',
            'last_name'  => 'required|max:50',
            'age'        => 'required',
            'gender'     => 'required'
        ]);

        $user = Auth::user();

        // Update the related user profile record
        $user->profile->first_name = $request->input('first_name');
        $user->profile->last_name  = $request->input('last_name');
        $user->profile->phone      = $request->input('phone');
        $user->profile->age        = $request->input('age');
        $user->profile->gender     = $request->input('gender');

        $user->profile->save();

        flash('Profile has been updated successfully.', 'success');

        return redirect()->route('profile');
    }

    /**
     * Update a user avatar
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function updateAvatar(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $avatar   = $request->file('avatar');
            $filename = Auth::user()->id . '.' . $avatar->getClientOriginalExtension();

            Image::make($avatar)
                 ->resize(300, 300)
                 ->save(public_path('/uploads/avatars/' . $filename));

            $user         = Auth::user();
            $user->avatar = $filename;
            $user->save();

            flash('Profile image has been uploaded successfully.', 'success');

            return redirect()->route('profile');
        }
    }
}
