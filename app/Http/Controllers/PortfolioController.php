<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Project;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('portfolio')->with([
            'portfolio' => Portfolio::first(),
            'projects' => Project::all(),
            'socialMedias' => SocialMedia::all(),
        ]);
    }
}
