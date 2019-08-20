<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Certificate;
use App\About;
use App\User;
use App\Sheet;
use Mail;

class MainController extends Controller
{
    public function getDownload()
    {
        $file= public_path(). "/download/policy.docx";

        $headers = array(
                'Content-Type: application/pdf',
                );

        return response()->file($file);
    }

    public function getPublic()
    {
        $file= public_path(). "/download/public.docx";

        $headers = array(
                'Content-Type: application/pdf',
                );

        return response()->file($file);
    }

    public function index()
    {
        $stocks = Slider::where("display", '=', "true")->latest()->get();
        foreach($stocks as $stock) {
            $stock->image = 'storage/' . $stock->image;
        }

        $certificates = Certificate::where('main_page', '=', 'true')->orderBy('id')->get();

        foreach($certificates as $certificate) {
            $certificate->logo_image = 'storage/' . $certificate->logo_image;
        }

        // 1 2 3 7

        $link1 = Sheet::where('device_type', '=', 'Телефон')
        ->where(function($q) {
            $q->where('page_type', '=', 1)
            ->orWhere('page_type', '=', 2)
            ->orWhere('page_type', '=', 3)
            ->orWhere('page_type', '=', 7);
        })->orderBy('view')->limit('4')->get();
        $link2 = Sheet::where('device_type', '=', 'Ноутбук')        
        ->where(function($q) {
            $q->where('page_type', '=', 1)
            ->orWhere('page_type', '=', 2)
            ->orWhere('page_type', '=', 3)
            ->orWhere('page_type', '=', 7);
        })->orderBy('view')->limit('4')->get();
        $link3 = Sheet::where('device_type', '=', 'Моноблок')
        ->where(function($q) {
            $q->where('page_type', '=', 1)
            ->orWhere('page_type', '=', 2)
            ->orWhere('page_type', '=', 3)
            ->orWhere('page_type', '=', 7);
        })->orderBy('view')->limit('4')->get();
        $link4 = Sheet::where('device_type', '=', 'Компьютер')
        ->where(function($q) {
            $q->where('page_type', '=', 1)
            ->orWhere('page_type', '=', 2)
            ->orWhere('page_type', '=', 3)
            ->orWhere('page_type', '=', 7);
        })->orderBy('view')->limit('4')->get();
        $link5 = Sheet::where('device_type', '=', 'Планшет')
        ->where(function($q) {
            $q->where('page_type', '=', 1)
            ->orWhere('page_type', '=', 2)
            ->orWhere('page_type', '=', 3)
            ->orWhere('page_type', '=', 7);
        })->orderBy('view')->limit('4')->get();
        $link6 = Sheet::where('device_type', '=', 'Фотоаппарат')
        ->where(function($q) {
            $q->where('page_type', '=', 1)
            ->orWhere('page_type', '=', 2)
            ->orWhere('page_type', '=', 3)
            ->orWhere('page_type', '=', 7);
        })->orderBy('view')->limit('4')->get();
        $link7 = Sheet::where('device_type', '=', 'Видеокамера')
        ->where(function($q) {
            $q->where('page_type', '=', 1)
            ->orWhere('page_type', '=', 2)
            ->orWhere('page_type', '=', 3)
            ->orWhere('page_type', '=', 7);
        })->orderBy('view')->limit('4')->get();

        $link8 = Sheet::where('manufacturer', '=', 'Apple')
        ->where(function($q) {
            $q->where('page_type', '=', 1)
            ->orWhere('page_type', '=', 2)
            ->orWhere('page_type', '=', 3)
            ->orWhere('page_type', '=', 7);
        })->orderBy('view')->limit('4')->get();


        return view('pages.index', compact('stocks', 'certificates', 
        'link1',
        'link2', 
        'link3', 
        'link4', 
        'link5', 
        'link6', 
        'link7', 
        'link8'));
    }

    public function about()
    {
        $about = About::latest()->first();

        if(!$about){
            abort(404);
        }

        $seo_title = $about['seo_title'];
        $seo_description = $about['seo_description'];
        $seo_keywords = $about['seo_keywords'];

        return view('pages.about', compact('about', 'seo_title', 'seo_description', 'seo_keywords'));
    }

    public function history()
    {
        return view('pages.history');
    }

    public function fix()
    {
        return view('pages.fix');
    }

    public function fixdisplay()
    {
        return view('pages.fixdisplay');
    }

    public function pricecurrent()
    {
        return view('pages.pricecurrent');
    }

    public function delivery()
    {
        return view('pages.delivery');
    }

}
