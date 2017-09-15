<?php

namespace App\Http\Controllers\MSSPDashboard\MSSPServices\ReportingServices;

use App\DotbitsUsers;
use App\Mail\UserCreated;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Role;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\AdminBaseController;

class ReportingServicesController extends AdminBaseController
{
    public function __construct()
    {

    }

    public function vulnerabilityScanReports()
    {
        $data['user']    = Auth::user();
        $this->layout->content = view('mssp-dashboard/mssp-services/reporting-services/vulnerability-scan-reports', $data);
    }

}
