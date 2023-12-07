<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Admin;
use App\Models\Posts;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DashboardController extends Controller
{
    //
    public function index()
    {
        // return view('dashboard.posts.index', [
        //     'posts' => Dashboard::where('user_id', auth()->user()->id)->get()
        // ]);
        // $id = Auth::user();

        return view('main.dashboard', [
            'nama'=>$id = Auth::user()
        ]);
    }
}
