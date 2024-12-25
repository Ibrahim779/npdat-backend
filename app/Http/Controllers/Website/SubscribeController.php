<?php

namespace App\Http\Controllers\Website;

use App\Models\Subscribe;
use App\Http\Controllers\Controller;
use App\Http\Requests\Website\StoreSubscribeRequest;

class SubscribeController extends Controller
{
  public function __invoke(StoreSubscribeRequest $request)
  {
    Subscribe::create($request->all());

    return response()->json(['message' => 'تم اضافتك الى القائمة البريدية وسيتم اشعارك فور انطلاق المنصة
    ']);
  }
}
