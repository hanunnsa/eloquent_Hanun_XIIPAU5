<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\support\facades\DB;

class TodolistController extends Controller
{
    public function index()
    {
        $todolist = DB ::table('webpro')
            ->select("id", "title", "description", "updated_at", "created_at")
            ->get();
        return view('example.index', ["todolist" => $todolist]);
    }   

    public function create()
    {
        return view('example.create');
    }
}