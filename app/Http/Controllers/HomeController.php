<?php

namespace App\Http\Controllers;

use App\Services\Blog\BlogService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    /**
     * @param BlogService $blogService
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(BlogService $blogService)
    {
        $user = Auth::user();
        $blogs = $blogService->getAll();
        return view('admin.home')
            ->with(['blogs' => $blogs]);
    }
}
