<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OwnerDetails;
use App\Http\Requests;


class OwnerDetailsController extends Controller
{
    public function index()
    {
        $owners = OwnerDetails::all();
        return $owners;
    }
}
