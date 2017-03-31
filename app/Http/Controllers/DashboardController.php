<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\DB;

use App\Models\customer;

class DashboardController extends BaseController {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {

    $data['countcustomer']= DB::table('customer')->count();
    $data['countagent']= DB::table('agents')->count();
    $data['countproduct']= DB::table('paket')->count();
    return view('dashboard',$data);
  }
  
}