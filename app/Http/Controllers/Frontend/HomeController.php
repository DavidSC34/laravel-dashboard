<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Hero;
use App\Models\About;
use App\Models\Service;
use App\Models\Category;
use App\Models\TyperTitle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Experience;
use App\Models\PortfolioItem;
use App\Models\PortfolioSectionSetting;
use App\Models\SkillItem;
use App\Models\SkillSectionSetting;

class HomeController extends Controller
{
    //
    public function index(){
        $hero = Hero::first();
        $typerTitles = TyperTitle::all();
        $services = Service::all();
        $about = About::first();
        $portfolioTitle = PortfolioSectionSetting::first();
        $portfolioCategories = Category::all();
        $portfolioItems = PortfolioItem::all();
        $skillTitle = SkillSectionSetting::first();
        $skillItems = SkillItem::all();
        $experience = Experience::first();
        return view('frontend.home',
            compact('hero',
                    'typerTitles',
                    'services',
                    'about',
                    'portfolioTitle',
                    'portfolioCategories',
                    'portfolioItems',
                    'skillTitle',
                    'skillItems',
                    'experience',
                ));
    }

    public function showPortfolio($id)
    {
        $portfolio = PortfolioItem::findOrFail($id);
        return view('frontend.portfolio-details',compact('portfolio'));
    }
}

