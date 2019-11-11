<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CamppusSiteController extends Controller
{
    public function home()
    {
        return view('camppus_site.home');
    }
    public function contact()
    {
        return view('camppus_site.contact');
    }
    public function gallery()
    {
        return view('camppus_site.gallery');
    }
    public function course_list()
    {
        return view('camppus_site.course_list');
    }
    public function course_list1()
    {
        return view('camppus_site.course_list1');
    }
    public function universitylife()
    {
        return view('camppus_site.universitylife');
    }
    public function aboutus()
    {
        return view('camppus_site.aboutus');
    }
    public function camppus_tour()
    {
        return view('camppus_site.camppus_tour');
    }
    public function coming_soon()
    {
        return view('camppus_site.coming_soon');
    }
}