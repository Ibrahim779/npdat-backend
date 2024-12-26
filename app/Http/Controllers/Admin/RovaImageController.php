<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RovaImageRequest;
use App\Http\Requests\Admin\RovaProductRequest;
use App\Models\RovaImage;
use App\Models\RovaProduct;
use Illuminate\Http\Request;

class RovaImageController extends Controller
{
    public function index()
    {
        // $this->authorize('viewAny', RovaProduct::class);

        $rova_images = RovaImage::paginate(10);

        return view('dashboard.rova_images.index', compact('rova_images'));
    }

    public function create()
    {
        // $this->authorize('create', RovaImage::class);

        return view('dashboard.rova_images.create');
    }

    public function store(RovaImageRequest $request)
    {
        // $this->authorize('create', RovaImage::class);

        Rovaimage::create($request->validated());

        toast(trans('main.rova_image_created'), 'success');

        return to_route('admin.rova-images.index');
    }

    public function edit(RovaImage $rova_image)
    {
        // $this->authorize('update', RovaImage::class);

        return view('dashboard.rova_images.edit', compact('rova_image'));
    }

    public function update(RovaImage $rova_image, RovaImageRequest $request)
    {
        // $this->authorize('update', RovaImage::class);

        $rova_image->update($request->validated());

        toast(trans('main.rova_image_updated'), 'success');

        return to_route('admin.rova-images.index');
    }

    public function destroy(RovaImage $rova_image)
    {
        // $this->authorize('delete', RovaImage::class);

        $rova_image->delete();

        toast(trans('main.rova_image_deleted'), 'success');

        return to_route('admin.rova-images.index');
    }
}
