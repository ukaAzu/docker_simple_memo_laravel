<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MemoController extends Controller
{
    public function index()
    {
        return view('memo');
    }

    public function add()
    {
        Memo::create([
            'user_id' => Auth::id(),
            'title' => '新規メモ',
            'content' => '',
        ]);

        return redirect()->route('memo.index');
    }
}
