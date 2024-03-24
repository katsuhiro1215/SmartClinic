<?php

namespace App\Http\Controllers;

use App\Http\Requests\Store\StoreBlogRequest;
use App\Http\Requests\Update\UpdateBlogRequest;
use App\Models\Blog;
use Inertia\Inertia;

class BlogController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(StoreBlogRequest $request)
    {
        //
    }

    public function show(Blog $blog)
    {
        //
    }

    public function edit(Blog $blog)
    {
        //
    }

    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        //
    }

    public function destroy(Blog $blog)
    {
        //
    }
}
