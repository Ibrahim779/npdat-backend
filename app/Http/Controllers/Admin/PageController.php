<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PageRequest;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use IIsmail\FileUpload\Facades\FileUpload;

class PageController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Page::class);

        $pages = Page::all();

        return view('dashboard.pages.index', compact('pages'));
    }

    public function create()
    {
        $this->authorize('create', Page::class);

        $positions = Page::getPositions();

        return view('dashboard.pages.create', compact('positions'));
    }

    public function store(PageRequest $request)
    {
        $this->authorize('create', Page::class);
        
        Page::create([
            'title' => [
                'en' => $request->title_en,
                'ar' => $request->title_ar
            ],
            'slug' => [
                'en' => Str::slug($request->title_en),
                'ar' => arabicSlug($request->title_ar),
            ],
            'body' => [
                'en' => $request->body_en,
                'ar' => $request->body_ar
            ],
            'description' => $request->description,
            'keywords' => $request->keywords,
            'image' => $request->image,
            'status' => $request->status,
            'position' => $request->position,
        ]);
        toast(trans('main.page_created'), 'success');

        return to_route('admin.web.pages.index');
    }

    public function edit(Page $page)
    {
        $this->authorize('update', Page::class);

        $positions = Page::getPositions();

        return view('dashboard.pages.edit', compact('page', 'positions'));
    }

    public function update(PageRequest $request, Page $page)
    {
        $this->authorize('update', Page::class);

        $page->update([
            'title' => [
                'en' => $request->title_en,
                'ar' => $request->title_ar
            ],
            'slug' => [
                'en' => Str::slug($request->title_en),
                'ar' => arabicSlug($request->title_ar),
            ],
            'body' => [
                'en' => $request->body_en,
                'ar' => $request->body_ar
            ],
            'description' => $request->description,
            'keywords' => $request->keywords,
            'image' => $request->image,
            'status' => $request->status,
            'position' => $request->position,
        ]);

        toast(trans('main.page_updated'), 'success');

        return back();
    }

    public function destroy(Page $page)
    {
        $this->authorize('delete', Page::class);

        FileUpload::deleteFile($page->image);

        $page->delete();

        toast(trans('main.page_deleted'), 'success');

        return to_route('admin.web.pages.index');
    }

    public function changeStatus(Page $page)
    {
        $page->update([
            'status' => !$page->status
        ]);
        return response()->json($page);
    }
}
