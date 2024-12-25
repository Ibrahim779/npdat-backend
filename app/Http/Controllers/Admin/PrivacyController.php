<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PrivacyRequest;
use App\Models\Privacy;

class PrivacyController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Privacy::class);

        $privacy = Privacy::first();

        return view('dashboard.privacy.index', compact('privacy'));
    }

    public function update(Privacy $privacy, PrivacyRequest $request)
    {
        $this->authorize('update', Privacy::class);

        $privacy->update([
            'body_en' => $request->body_en,
            'body_ar' => $request->body_ar,
        ]);

        toast(trans('main.privacy_updated'), 'success');

        return to_route('admin.privacy.index');
    }
}
