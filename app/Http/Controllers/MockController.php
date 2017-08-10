<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class MockController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function account()
    {
        return view('settings.account');

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function profile()
    {
        return view('settings.profile');
    }





    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function search()
    {
        return view('search');
    }
    public function postaccount(Request $data)
    {
        $input = $data->all();
        $user = \Auth::user();
        $user->update([
            'url_name' => $input['url_name'],
            'email' => $input['email'],
            'password' => bcrypt($input['password'])
        ]);

        return view('home');

    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function user()
    {
        return view('user.index');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function following()
    {
        return view('user.following');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function followers()
    {
        return view('user.followers');
    }

    public function reprofile(Request $duda)
    {
        $output = $duda->all();
        $user = \Auth::user();
        $user->update([
            'description' => $output['description'],

            'display_name' => bcrypt($output['display_name'])

        ]);

        return view('home');

    }

}
