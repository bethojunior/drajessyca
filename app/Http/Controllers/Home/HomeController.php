<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Services\Blog\BlogService;
use App\Services\Info\InfoService;
use App\Services\Slide\SlideService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(BlogService $blogService, InfoService $infoService, SlideService $slideService)
    {

        $user = Auth::user();
        $info = $infoService->findAll();
        $blogs = $blogService->getAll();
        $slides = $slideService->getAll();
        return view('home.default')
            ->with(['blogs' => $blogs,'info' => $info,'slides' => $slides]);
    }
}
