<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\T_Food;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
// use App\Models\Slide;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods =DB::table('t_food')->select('*');
        $foods=$foods->get();
        // $slide=Slide::all();
       return view('index',compact('foods'));
    }

    // public function getChitietsp(Request $request){
    //     $food = T_Food::where('id',$request->id->fisrt());
    //     return view('food-detail', compact('foods'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $foods=T_food::all();
        return view('add',compact('foods'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $food=T_Food::find($id);
        return view('detail',compact('food'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}