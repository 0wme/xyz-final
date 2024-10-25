<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Track;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('tracks')->paginate(10);
        return view('app.categories.index', compact('categories'));
    }

    public function show(Category $category)
    {
        $tracks = Track::where('category_id', $category->id)
                       ->with('user')
                       ->orderBy('likes_count', 'desc')
                       ->paginate(10);

        return view('app.categories.show', compact('category', 'tracks'));
    }
}