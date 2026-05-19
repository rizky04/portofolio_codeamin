<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Education;
use App\Models\Post;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Testimonial;

class HomeController extends Controller
{
    private function sharedData(): array
    {
        return [
            'profile' => Profile::first(),
        ];
    }

    public function index()
    {
        $profile = Profile::first();
        $skills = Skill::visible()->orderBy('sort_order')->get()->groupBy('category');
        $projects = Project::published()->with('technologies')->latest()->take(6)->get();
        $experiences = Experience::orderBy('sort_order')->orderByDesc('start_date')->take(3)->get();
        $testimonials = Testimonial::visible()->get();

        return view('pages.home', compact('profile', 'skills', 'projects', 'experiences', 'testimonials'));
    }

    public function about()
    {
        $profile = Profile::first();
        $skills = Skill::visible()->orderBy('sort_order')->get()->groupBy('category');
        $experiences = Experience::orderBy('sort_order')->orderByDesc('start_date')->get();

        return view('pages.about', compact('profile', 'skills', 'experiences'));
    }

    public function portfolio()
    {
        $profile = Profile::first();
        $projects = Project::published()->with('technologies')->orderBy('sort_order')->get();

        return view('pages.portfolio', compact('profile', 'projects'));
    }

    public function experience()
    {
        $profile = Profile::first();
        $experiences = Experience::orderBy('sort_order')->orderByDesc('start_date')->get();
        $educations = Education::orderBy('sort_order')->get();

        return view('pages.experience', compact('profile', 'experiences', 'educations'));
    }

    public function contact()
    {
        $profile = Profile::first();

        return view('pages.contact', compact('profile'));
    }
}
