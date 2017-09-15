<?php

namespace App\Http\Controllers\MSSPDashboard\MSSPServices;

use App\DotbitsUsers;
use App\Mail\UserCreated;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Role;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\AdminBaseController;

class MsspServicesController extends AdminBaseController
{
    public function __construct()
    {

    }

    public function index()
    {
        $data['user']    = Auth::user();
        $this->layout->content = view('mssp-dashboard/mssp-services/index', $data);
    }

    public function professionalServices()
    {
        $data['user']    = Auth::user();
        $this->layout->content = view('mssp-dashboard/mssp-services/professional-services', $data);
    }

    public function reportingServices()
    {
        $data['user']    = Auth::user();
        $this->layout->content = view('mssp-dashboard/mssp-services/reporting-services', $data);
    }
}
