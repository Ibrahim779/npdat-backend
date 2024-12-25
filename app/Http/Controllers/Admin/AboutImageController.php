<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AboutImageRequest;
use App\Models\AboutImage;

class AboutImageController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', AboutImage::class);

        $aboutImages = AboutImage::paginate(10);

        return view('dashboard.aboutImages.index', compact('aboutImages'));
    }

    public function create()
    {
        $this->authorize('create', AboutImage::class);

        return view('dashboard.aboutImages.create');
    }

    public function store(AboutImageRequest $request)
    {
        $this->authorize('create', AboutImage::class);

        AboutImage::create($request->validated());

        toast(trans('main.aboutImage_created'), 'success');

        return to_route('admin.aboutImages.index');
    }

    public function edit(AboutImage $aboutImage)
    {
        $this->authorize('update', AboutImage::class);

        return view('dashboard.aboutImages.edit', compact('aboutImage'));
    }

    public function update(AboutImage $aboutImage, AboutImageRequest $request)
    {
        $this->authorize('update', AboutImage::class);

        $aboutImage->update($request->validated());

        toast(trans('main.aboutImage_updated'), 'success');

        return to_route('admin.aboutImages.index');
    }

    public function destroy(AboutImage $aboutImage)
    {
        $this->authorize('delete', AboutImage::class);

        $aboutImage->delete();

        toast(trans('main.aboutImage_deleted'), 'success');

        return to_route('admin.aboutImages.index');
    }
}
