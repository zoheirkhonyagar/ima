<?php

namespace App\Http\Controllers\Admin;

use App\Pcat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PcatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pcats = Pcat::paginate(10);
        return view('admin.post.category.index' , compact('pcats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            'title' => 'required',
            'description' => 'required',
            'priority' => 'nullable|numeric',
        ]);

        Pcat::create([
            'title' => $request->title,
            'description' => $request->description,
            'priority' =>  $request->priority,
        ]);

        return redirect(route('pcat.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pcat  $pcat
     * @return \Illuminate\Http\Response
     */
    public function show(Pcat $pcat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pcat  $pcat
     * @return \Illuminate\Http\Response
     */
    public function edit(Pcat $pcat)
    {
        return view('admin.post.category.edit' , compact('pcat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pcat  $pcat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pcat $pcat)
    {
        $this->validate($request , [
            'title' => 'required',
            'description' => 'required',
            'priority' => 'nullable|numeric',
        ]);

        $pcat->update([
            'title' => $request->title,
            'description' => $request->description,
            'priority' =>  $request->priority,
        ]);

        return redirect(route('pcat.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pcat  $pcat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pcat $pcat)
    {
        $pcat->delete();
        return redirect(route('pcat.index'));
    }
}
