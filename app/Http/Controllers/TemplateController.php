<?php

namespace App\Http\Controllers;

use App\Models\Template;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function showAcceuil()
    {
        // $selectPosts = Template::all();
        // ,compact('selectPosts')
        return view('template.acceuil');
    }

    public function showAbout()
    {
        return view('template.about');
    }

    public function showFormation()
    {
        return view('template.formation');
    }

    public function showLocation()
    {
        return view('template.location');
    }

    

    public function showActualites()
    {
        return view('template.actualites');
    }
    public function showContact()
    {
        return view('template.contact');
    }

    public function showArticle(){
        return view("template.blog.article");
    }
    
    public function showArticle2(){
        return view("template.blog.article2");
    }
    
}
