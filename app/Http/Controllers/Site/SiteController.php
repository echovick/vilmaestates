<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function homePage()
    {
        return view('pages.home');
    }

    public function aboutPage()
    {
        return view('pages.about');
    }

    public function teamPage()
    {
        return view('pages.team');
    }

    public function portfolioPage()
    {
        return view('pages.portfolio');
    }

    public function faqPage()
    {
        return view('pages.faq');
    }

    public function locationsPage()
    {
        return view('pages.locations');
    }

    public function propertiesPage()
    {
        return view('pages.properties');
    }

    public function servicesPage()
    {
        return view('pages.services');
    }

    public function blogPage()
    {
        return view('pages.blog');
    }

    public function contactPage()
    {
        return view('pages.contact');
    }
}
