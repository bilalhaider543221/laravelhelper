<?php

namespace laravelhelper\LaravelIideHelper\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SqlQueryController extends Controller
{
    public function index()
    {
        return view('laravel-iide-helper::sql-query-form');
    }

    public function executeQuery(Request $request)
    {
        $query = $request->input('query');
        $results = DB::select($query);
        return view('laravel-iide-helper::sql-query-form', compact('results'));
    }
}
