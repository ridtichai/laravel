<?php
namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    public function getIndex()
    {
        return view('admin.dashboard.index');
    }


}