<?php

namespace App\Http\Controllers;
use App\Models\Tweet;
use App\Models\User;
use Illuminate\Http\Request;



class HomeController extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {


       //$tweets = Tweet::where('user_id','=', \Auth::user()->id);
       // リレーション必要なのでは？

      $tweets = Tweet::all();



        return view('home',['tweets'=> $tweets]);
}

    public function change(Request $date)
    {
        $output = $date->all();

        $user = \Auth::user();

        $user->update([
            'description' => $output['description'],
            'display_name' => bcrypt($output['display_name'])

        ]);

        return view('home');
    }


        public function reading(Request $readword)
        {
            $word = $readword -> input('body');

            Tweet::create([
                'body'=> $word,
                'user_id' => \Auth::user()->id,
            ]);

            return back();
                //view('fragments.tweet', ['word' => $word]);
        }




        public function update(Request $readword, $body){
            Tweet::where('body', '=', $body)
                ->update([
                    'body' => $readword->input('body'),
                ]);


        }



    }
