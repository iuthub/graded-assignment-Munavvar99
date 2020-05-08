<?php

namespace App\Http\Controllers;

use App\Custom\ExchangeRate;
use Illuminate\Http\Request;
use App\Post;
class AdminController extends Controller
{

    public function getAdmin(){
        $posts = Post::where('status',0)->get();
        $numbers = Post::where('status',0)->count();
        return view('admin.index',['rate'=>ExchangeRate::getRates(),'posts'=>$posts,'number'=>$numbers]);
    }

    public function getStatistics(){
        $rejected = Post::where('status',-1)->count();
        $success = Post::where('status',1)->count();
        $news = Post::where('status',0)->count();
        $total = Post::all()->count();
        return view('admin.statistics',['rate'=>ExchangeRate::getRates(),
            'rejected'=>$rejected,'success'=>$success,'news'=>$news,'total'=>$total,'number'=>$news]);
    }

    public function acceptProduct($id){
        $product = Post::find($id);
        $product->status=1;
        $product->save();
        return redirect(route('admin.home'));
    }

    public function rejectProduct($id){
        $product = Post::find($id);
        $product->status = -1;
        $product->save();
        return redirect(route('admin.home'));
    }

}
