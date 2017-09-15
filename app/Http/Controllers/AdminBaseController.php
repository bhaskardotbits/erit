<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class AdminBaseController extends TemplateController
{
	/*
	 * Admin Templates
	 */
	protected $layout = 'layouts.main';

}
