<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Auction;
use App\Models\Announcement;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $news = News::where("status","public")->orderBy("publishedAt","desc")->get();
        $auctions = Auction::orderBy("last_date","desc")->get();
        $announcement = Announcement::where("status","public")->first();
        return view('web.home',compact("news","auctions","announcement"));
    }

    public function appellateTribunal(){
        $params = [
            "singular_title"=>"Appellate Tribunal",
            "plural_title"=>"Appellate Tribunal"
        ];
        
        return view("web.page.appellateTribunal",compact("params"));
    }
}