<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\informational;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function index()
    {
        $pages = informational::latest()->get();
        return view('admin.informational.index', compact('pages'));
    }

    public function create()
    {
        return view('admin.informational.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required'
        ]);

        informational::create([
            'title' => $request->input('title'),
            'slug' => Str::slug($request->input('title')),
            'content' => $request->input('content'),
            'status' => $request->input('status') ?? 1,
        ]);

        return redirect()->route('admin.informational.index')->with('success', 'Page created successfully.');
    }

    public function edit($id)
    {
        $page = informational::findOrFail($id);
        return view('admin.informational.edit', compact('page'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required'
        ]);

        $page = informational::findOrFail($id);
        $page->update([
            'title' => $request->input('title'),
            'slug' => Str::slug($request->input('title')),
            'content' => $request->input('content'),
            'status' => $request->input('status') ?? 1,
        ]);

        return redirect()->route('admin.informational.index')->with('success', 'Page updated successfully.');
    }

    public function destroy($id)
    {
        $page = informational::findOrFail($id);
        $page->delete();

        return redirect()->route('admin.informational.index')->with('success', 'Page deleted successfully.');
    }
}
