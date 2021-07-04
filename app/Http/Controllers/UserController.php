<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use App\Models\Follows;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Displays a users public page
     *
     * @param  int  $accountId
     * @return \Illuminate\View\View
     */
    public function index($accountId)
    {
        return view('user.index');
    }

    /**
     * Displays the feed page
     *
     * @return \Illuminate\View\View
     */
    public function feed()
    {
        $account = Accounts::where('id', '=', session('AccountId'))->first();
        $follows = Follows::where('followerId', '=', session('AccountId'))->get();

        return view('user.feed', compact('account'), compact('follows'));
    }

    /**
     * Displays the individual post page
     *
     * @param  int  $postId
     * @return \Illuminate\View\View
     */
    public function post($postId)
    {
        return view('user.post');
    }

    /**
     * Saves a follow to the database
     *
     * @param  int  $userFollowedId
     */
    public function followAction($userFollowedId)
    {
        $follow = new Follows;

        $follow->followerId     = session('AccountId');
        $follow->userFollowedId = $userFollowedId;

        $save = $follow->save();

        $account = Accounts::where('id', '=', $userFollowedId)->first();
        $follow  = Follows::where('userFollowedId', '=', $userFollowedId)->first();

        if ($save) {
            return back()->with('$account', $account)
                         ->with('$follow', $follow);
        } else {
            return back()->with('Error', 'Failed to follow save to database');
        }
    }

    /**
     * Deletes a follow from the database
     *
     * @param  int  $userFollowedId
     */
    public function unFollowAction($userFollowedId)
    {
        return back();
    }

    /**
     * Saves a post to the database
     * @param  int  $postId
     */
    public function postAction($postId)
    {

        return redirect('/');
    }

    /**
     * Deletes a post from the database
     *
     * @param  int  $postId
     */
    public function deletePostAction($postId)
    {
        return redirect('/');
    }

    /**
     * Saves a comment to the database
     *
     * @param  int  $commendId
     */
    public function commentAction($commendId)
    {
        return redirect('/');
    }

    /**
     * Deletes a comment from the database
     *
     * @param  int  $commendIds
     */
    public function deleteCommentAction($commendId)
    {
        return redirect('/');
    }

    /**
     * Displays the messages page
     *
     * @return \Illuminate\View\View
     */
    public function messages()
    {
        $follows = Follows::where('followerId', '=', session('AccountId'))->get();

        return view('user.messages', compact('follows'));
    }

    /**
     * Saved a message to the database
     *
     * @param  int  $messageId
     * @return \Illuminate\View\View
     */
    public function sendMessageAction($messageId)
    {
        return redirect('/');
    }

    /**
     * Deletes a message from the database
     *
     * @param  int  $messageId
     * @return \Illuminate\View\View
     */
    public function deleteMessageAction($messageId)
    {
        return redirect('/');
    }
}
