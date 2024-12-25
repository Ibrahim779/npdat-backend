<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RovaProductRequest;
use App\Models\RovaProduct;

class RovaProductController extends Controller
{
    public function index()
    {
        // $this->authorize('viewAny', RovaProduct::class);

        $rova_products = RovaProduct::paginate(10);

        return view('dashboard.rova_products.index', compact('rova_products'));
    }

    public function create()
    {
        // $this->authorize('create', RovaProduct::class);

        return view('dashboard.rova_products.create');
    }

    public function store(RovaProductRequest $request)
    {
        // $this->authorize('create', RovaProduct::class);

        RovaProduct::create($request->validated());

        toast(trans('main.rova_product_created'), 'success');

        return to_route('admin.rova-products.index');
    }

    public function edit(RovaProduct $rova_product)
    {
        // $this->authorize('update', RovaProduct::class);

        return view('dashboard.rova_products.edit', compact('rova_product'));
    }

    public function update(RovaProduct $rova_product, RovaProductRequest $request)
    {
        // $this->authorize('update', RovaProduct::class);

        $rova_product->update($request->validated());

        toast(trans('main.rova_product_updated'), 'success');

        return to_route('admin.rova-products.index');
    }

    public function destroy(RovaProduct $rova_product)
    {
        // $this->authorize('delete', RovaProduct::class);

        $rova_product->delete();

        toast(trans('main.rova_product_deleted'), 'success');

        return to_route('admin.rova-products.index');
    }
}
