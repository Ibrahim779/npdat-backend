<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Contact;
use App\Models\Member;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $contactsCount = Contact::count();
        $contactsLastMonth = Contact::where('created_at', '>', Carbon::now()->subMonth())->count();

        return view('dashboard.index', get_defined_vars());
    }
}
