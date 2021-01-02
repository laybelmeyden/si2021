<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YearsController extends Controller
{
    public function years2011()
    {
        return view('years.2011.year2011');
    }
    public function telekom_hit_2011()
    {
        return view('years.2011.project1');
    }
    public function telekom_idea_2011()
    {
        return view('years.2011.project2');
    }

    public function years2012()
    {
        return view('years.2012.year2012');
    }
    public function telekom_hit_2012()
    {
        return view('years.2012.project1');
    }
    public function telekom_idea_2012()
    {
        return view('years.2012.project2');
    }
    public function years2013()
    {
        return view('years.2013.year2013');
    }
    public function years2014()
    {
        return view('years.2014.year2014');
    }
    public function years2015()
    {
        return view('years.2015.year2015');
    }
    public function years2016()
    {
        return view('years.2016.year2016');
    }
    public function years2017()
    {
        return view('years.2017.year2017');
    }
    public function years2018()
    {
        return view('years.2018.year2018');
    }
    public function years2019()
    {
        return view('years.2019.year2019');
    }
    public function years2020()
    {
        return view('years.2020.year2020');
    }
}
