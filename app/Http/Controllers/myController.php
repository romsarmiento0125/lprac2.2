<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\myModel;
use Illuminate\Support\Facades\Redirect;

class myController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['mydata'] = myModel::all(); 
        return view('acrud.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('acrud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        myModel::create($request->all());
        return Redirect(route('acrud.index'));

        // $model = ['name' => 'other sample', 'decription' => 'other description'];

        // myModel::create($model);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $showdata = myModel::findorfail($id);

        return view('acrud.show', compact('showdata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(myModel $acrud)
    {
        return view('acrud.edit', compact('acrud'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, myModel $acrud)
    {
        $acrud->update($request->all());
        return Redirect(route('acrud.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(myModel $acrud)
    {
        // $deldata = myModel::findorfail($id);
        // $deldata->delete();  
        // return Redirect(route('acrud.index'));
        $acrud->delete();
        return Redirect(route('acrud.index'));
    }
}
