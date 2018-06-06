<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    /**
     * @return string
     */
    public function index()
    {
        return view('pages.index');
    }
    public function about()
    {
        $company    =   "RentFlees";
        $co_owner   =   "BullionGuru";
        return view('pages.about', compact('company' , 'co_owner'));
    }
}
