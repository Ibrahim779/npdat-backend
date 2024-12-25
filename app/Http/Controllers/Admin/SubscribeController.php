<?php

namespace App\Http\Controllers\Admin;

use App\Models\Subscribe;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubscribeRequest;
use App\Http\Requests\UpdateSubscribeRequest;

class SubscribeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', Subscribe::class);

        $subscribes = Subscribe::latest()->paginate(20);

        return view('dashboard.subscribes.index', compact('subscribes'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscribe $subscribe)
    {
        $this->authorize('delete', Subscribe::class);

        $subscribe->delete();

        toast(trans('web.subscribe_deleted'), 'success');

        return to_route('admin.web.subscribes.index');
    }
}
