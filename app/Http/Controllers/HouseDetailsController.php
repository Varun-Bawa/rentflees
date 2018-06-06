<?php

namespace App\Http\Controllers;

use J42\LaravelFirebase\LaravelFirebaseServiceProvider;
use Request;
use App\Http\Requests;


class HouseDetailsController extends Controller
{
    //display function displays the Single-View-of-Houses
    public function display($id)
    {
        return view('pages.houseDetails.display', compact('id'));
    }

    //upload function provides the upload code for uploading facility
    public function upload_house_details()
    {
        return view('pages.houseDetails.upload_house_details');
    }

    //Processing the post request send by user for property uploading
    public function store_house_details()
    {

    //    $fb = Firebase::initialize('https://bullionguru-1287.firebaseio.com/', 'voQLfJMsAKqkzLrgjL4L5asGCeDw7gFL2XovrJTB');

//or set your own implementation of the ClientInterface as second parameter of the regular constructor
    //    $fb = new Firebase([ 'base_url' => 'https://bullionguru-1287.firebaseio.com/', 'token' => 'voQLfJMsAKqkzLrgjL4L5asGCeDw7gFL2XovrJTB' ], new GuzzleHttp\Client());

//retrieve a node
    //    $nodeGetContent = $fb->get('https://bullionguru-1287.firebaseio.com/rentflees');

    //    return $nodeGetContent;
    //    $test = Firebase::get('https://bullionguru-1287.firebaseio.com/');
    //    return $test;
    //    $name           =   Firebase::get('https://bullionguru-1287.firebaseio.com/bullionguru-1287');
      $all            =   Firebase::get('https://bullionguru-1287.firebaseio.com/rentflees');;
    /*  $title          =   Request::get('title');
        $address        =   Request::get('address');
        $rent           =   Request::get('rent');
        $security       =   Request::get('security');
        $type           =   Request::get('type');
        $category       =   Request::get('category');
        $description    =   Request::get('description');
        $food_services  =   Request::get('food_services');
        $rules          =   Request::get('rules');
        $amenities      =   Request::get('amenities');
        $email_owner    =   Request::get('email_owner');
        $_token         =   Request::get('_token');
    */

        //HouseDetails::create($all);
        return $all;

    }
}


