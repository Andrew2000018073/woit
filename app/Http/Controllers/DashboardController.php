<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Admin;
use App\Models\Posts;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
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
        $data = [
            'belum'=> DB::table('workorders')->where('status', 'Belum dikerjakan')->get()->count(),
            'sedang'=> DB::table('workorders')->where('status', 'Sedang dikerjakan')->get()->count(),
            'sudah'=> DB::table('workorders')->where('status', 'Selesai')->get()->count(),
        ];

        return view('main.dashboard', $data);
    }
}
