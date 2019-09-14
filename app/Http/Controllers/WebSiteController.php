<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;

class WebSiteController extends Controller
{

  public function index()
  {
    return view('pages.trabalheconosco', compact(''));
  }
}
