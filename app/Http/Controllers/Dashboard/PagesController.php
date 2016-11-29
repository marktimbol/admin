<?php

namespace App\Http\Controllers\Dashboard;

use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePageRequest;

class PagesController extends Controller
{
    public function index()
    {
    	$pages = Page::latest()->get();
    	return view('dashboard.pages.index', compact('pages'));
    }

    public function edit(Page $page)
    {
    	return view('dashboard.pages.edit', compact('page'));
    }

    public function update(UpdatePageRequest $request, Page $page)
    {
    	$page->update($request->all());

    	flash()->success('Page has been successfully updated.');
    	return back();
    }
}
