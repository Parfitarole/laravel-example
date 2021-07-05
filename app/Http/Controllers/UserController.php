<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Follow;
use App\Models\Post;
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
        $account = Account::where('id', '=', session('AccountId'))->first();
        $follows = Follow::where('follower_id', '=', $account->id)->get();
        $posts   = Post::orderBy('created_at', 'desc')->get();

        return view('user.feed',
            [
                'account' => $account,
                'follows' => $follows,
                'posts'   => $posts
            ]
        );
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
     * Saves a post to the database
     * @param  int  $postId
     */
    public function postAction(Request $request)
    {
        $request->validate(['content' => 'required']);

        $post = new Post;

        $post->account_id = session('AccountId');
        $post->content    = $request->content;

        $save = $post->save();

        if (!$save) {
            return back()->with('Error', 'Failed to save post to the database');
        } else {
            return redirect('/feed');
        }
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
     * Saves a follow to the database
     *
     * @param  int  $userFollowedId
     */
    public function followAction($userFollowedId)
    {
        $follow = new Follow;

        $follow->followerId     = session('AccountId');
        $follow->userFollowedId = $userFollowedId;

        $save = $follow->save();

        $account = Account::where('id', '=', $userFollowedId)->first();
        $follow  = Follow::where('userFollowedId', '=', $userFollowedId)->first();

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
        $follows = Follow::where('follower_id', '=', session('AccountId'))->get();

        return view('user.messages', compact('follows'));
    }

    /**
     * Saved a message to the database
     *
     * @param  int  $messageId
     * @return \Illuminate\View\View
     */
    public function sendMessageAction(Request $request)
    {
        $request->validate(['content' => 'required']);

        $message = new Post;

        $message->account_id   = session('AccountId');
        $message->recepient_id = $request->recepient_id;
        $message->content      = $request->content;

        $save = $message->save();

        if (!$save) {
            return back()->with('Error', 'Failed to save message to the database');
        } else {
            return redirect('/messages');
        }
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
