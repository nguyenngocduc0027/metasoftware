<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view(view: 'pages.home');
    }

    public function about()
    {
        return view(view: 'pages.about');
    }

    public function career()
    {
        return view(view: 'pages.career');
    }

    public function career_detail()
    {
        return view(view: 'pages.career_detail');
    }

    public function portfolio()
    {
        return view(view: 'pages.portfolio');
    }

    public function team()
    {
        return view(view: 'pages.team');
    }

    public function team_detail()
    {
        return view(view: 'pages.team_detail');
    }

    public function faq()
    {
        return view(view: 'pages.faq');
    }

    public function service_detail()
    {
        return view(view: 'pages.service_detail');
    }

    public function project()
    {
        return view(view: 'pages.project');
    }

    public function project_detail()
    {
        return view(view: 'pages.project_detail');
    }

    public function blog()
    {
        return view(view: 'pages.blog');
    }

    public function blog_detail()
    {
        return view(view: 'pages.blog_detail');
    }

    public function contact()
    {
        return view(view: 'pages.contact');
    }
}
