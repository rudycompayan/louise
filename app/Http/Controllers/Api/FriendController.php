<?php

namespace App\Http\Controllers\Api;

use App\Repositories\FriendsRepository;
use App\User;
use Hootlex\Friendships\Models\Friendship;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class FriendController extends ResponseController
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getFriends()
    {
        $friends = DB::table('friendships as friend')
                     ->join('users as user', 'friend.sender_id', '=', 'user.id')
                     ->join('user_profiles as profile', 'user.id', '=', 'profile.user_id')
                     ->select(
                         'user.avatar',
                         'user.avatar_social',
                         'user.email',
                         'profile.first_name',
                         'profile.last_name',
                         'profile.phone',
                         'profile.gender',
                         'profile.age',
                         'friend.created_at',
                         'friend.sender_id',
                         'friend.id')
                     ->where('friend.recipient_id', $this->guard()
                                                         ->id())
                     ->where('friend.status', 1)
                     ->get();

        return $this->response([
            'code'    => 200,
            'friends' => $friends
        ]);
    }

    /**
     * @return mixed
     */
    public function sendRequest(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'friendId' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->responseWithError($validator->errors()
                                                      ->first());
        }

        $recipient = \App\User::find(request('friendId'));

        try {

            $this->guard()
                 ->user()
                 ->befriend($recipient);

            return $this->responseWithSuccess('Invite request sent');

        } catch (\Exception $e) {
            return $this->responseWithError('Error sending friend request');

        }

    }

    /**
     * Confirm a friend request
     *
     * @param Request $request
     * @return mixed
     */
    public function confirmRequest(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'senderId' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->responseWithError($validator->errors()
                                                      ->first());
        }
        $sender = User::find(request('senderId'));
        try {
            $this->guard()->user()->acceptFriendRequest($sender);
            return $this->responseWithSuccess('Friend request has been confirmed!');
        } catch (\Exception $e) {
            return $this->responseWithError('Error confirming friend request');
        }


    }

    /**
     * Delete friend request
     *
     * @param Request $request
     * @return mixed
     */
    public function deleteRequest(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'requestId' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->responseWithError($validator->errors()
                                                      ->first());
        }
        $user = auth()->user();

        if (!Friendship::where('recipient_id', $user->id)->where('sender_id',$request->requestId)->delete()) {
            return $this->responseWithError('Error deleting friend request. Please contact the administrator!');
        }
        return $this->responseWithSuccess('Friend request has been decline!');
    }
}
