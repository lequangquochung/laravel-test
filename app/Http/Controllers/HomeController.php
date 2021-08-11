<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $document = file_get_contents('https://eodhistoricaldata.com/financial-summary/VNINDEX.INDX');
        // $document = HtmlDomParser::str_get_html('https://eodhistoricaldata.com/financial-summary/VNINDEX.INDX');
        // $document->find('a');
        $data = "Chao";
        $content = "helllooo";

        return view('index')->with('data', $data)->with('content', $content);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index02()
    {

        // $document = file_get_contents('https://eodhistoricaldata.com/financial-summary/VNINDEX.INDX');
        // $document = HtmlDomParser::str_get_html('https://eodhistoricaldata.com/financial-summary/VNINDEX.INDX');
        // $document->find('a');
        $data = "Chao";
        $content = "helllooo";

        return view('index02')->with('data', $data)->with('content', $content);
    }

    public function ajaxdemo(Request $request)
    {
        $data = $request->x;


        return $data;
    }
    public function master()
    {

        // $document = file_get_contents('https://eodhistoricaldata.com/financial-summary/VNINDEX.INDX');
        // $document = HtmlDomParser::str_get_html('https://eodhistoricaldata.com/financial-summary/VNINDEX.INDX');
        // $document->find('a');
        $data = "Chao";
        $content = "helllooo";

        return view('master/master')->with('data', $data)->with('content', $content);
    }
}
