<?php

namespace App\Http\Controllers;

use App\Http\Filters\ManureFilter;
use App\Http\Requests\Admin\Manure\FilterRequest;
use App\Models\Manure;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


//     работает!
    public function index()
    {
        return redirect()->route('admin.manure.index');
    }

//    public function index()
//    {
//        return view('home');
//    }


//    public function index(FilterRequest $request)
//    {
//        $data = $request->validated();
//
//        $filter = app()->make(ManureFilter::class, ['queryParams' => array_filter($data)]);
//
//        $manures = Manure::filter($filter)->paginate(10);
//
//        return view('admin.manure.index', compact('manures'));
//
//    }
}
