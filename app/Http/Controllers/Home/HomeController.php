<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Services\Blog\BlogService;
use App\Services\Info\InfoService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(BlogService $blogService, InfoService $infoService)
    {

        $user = Auth::user();
        $info = $infoService->findAll();
        $blogs = $blogService->getAll();
        return view('home.index')
            ->with(['blogs' => $blogs,'info' => $info]);
    }
}
