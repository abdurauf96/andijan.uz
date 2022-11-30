<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Council;
use App\Models\CouncilDecision;
use App\Models\Post;
use App\Models\Senator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function dashboard()
    {
        $statistika['news']=Post::all()->count();
        $statistika['councils']=Council::all()->count();
        $statistika['senators']=Senator::all()->count();
        $statistika['decisions']=CouncilDecision::all()->count();

        return view('admin.dashboard', compact('statistika'));
    }
}
