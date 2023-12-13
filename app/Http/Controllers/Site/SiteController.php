<?php

namespace App\Http\Controllers\Site;

use App\Constants\EstateProperty;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public $estateProperty;

    public function __construct()
    {
        $this->estateProperty = new EstateProperty;
    }
    public function homePage()
    {
        $properties = $this->estateProperty->properties;
        $estates = $this->estateProperty->estates;

        return view('pages.home', compact('properties', 'estates'));
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
        $properties = $this->estateProperty->properties;
        $estates = $this->estateProperty->estates;

        return view('pages.properties', compact('properties', 'estates'));
    }

    public function propertyDetailPage()
    {
        return view('pages.propertyDetail');
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
