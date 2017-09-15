<?php

namespace App\Http\Controllers\MSSPDashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MsspDashboardController extends Controller
{
    public function __construct()
    {

    }

    public function msspConfiguration()
    {
        $data['user']    = Auth::user();
        return view('mssp-dashboard/mssp-configuration', $data);
    }

    public function msspServices()
    {
        $data['user']    = Auth::user();
        return view('mssp-dashboard/mssp-services', $data);
    }
}
