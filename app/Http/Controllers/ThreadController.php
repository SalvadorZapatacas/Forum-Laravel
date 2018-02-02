<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreThreadForum;
use App\Thread;
use Illuminate\Http\Request;
use Styde\Html\Facades\Alert;

class ThreadController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
        $this->middleware('owns')->only(['edit','update','destroy']);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('thread.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreThreadForum $request)
    {
        $thread = new Thread();
        $thread->fill($request->all());
        $thread->user_id = auth()->user()->getAuthIdentifier();
        $thread->save();
        Alert::success("Tu hilo se ha creado satisfactoriamente");
        return redirect('/thread/' . $thread->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $thread = Thread::findOrFail($id);

        return view('thread.show', compact('thread'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $thread = Thread::findOrFail($id);
        return view('thread.edit',compact('thread'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Thread::findOrFail($id)->update($request->all());
        Alert::success("Tu hilo se ha editado satisfactoriamente");
        return redirect()->route('thread.show',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
