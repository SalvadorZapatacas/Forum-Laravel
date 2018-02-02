<?php

namespace App\Http\Controllers;

use App\Thread;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $threads = Thread::orderBy('created_at', 'desc')->paginate(5);;
        return view('forum.index', compact('threads'));
    }

}
