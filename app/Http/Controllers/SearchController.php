<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class SearchController extends Controller
{

    public function readDatabase(Request $req,$key)
    {
        if($key){
            $query = '%'.strtolower($key).'%';
            //For the line below used the Laravel's Documentation. URL: https://laravel.com/docs/5.8/queries#where-clauses
            $data = DB::table('posts')->whereRaw('LOWER(title) LIKE (?)',["%{$query}%"])->get();
            return response()->json($data, 200);
        }
        //$data = DB::table('posts')->get();
        //return response()->json($data, 200);
    }
    public function showResultsPage($key){
        if($key)
        {
            $query = '%'.strtolower($key).'%';
            //For the line below used the Laravel's Documentation. URL: https://laravel.com/docs/5.8/queries#where-clauses
            $data = DB::table('posts')->whereRaw('LOWER(title) LIKE (?)',["%{$query}%"])->get();
            return view('list');
        }
    }
}
