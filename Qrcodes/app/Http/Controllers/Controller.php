<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	function insert(Request $req)
	{
		$title1 = $req->input('title1');
		$url1 = $req->input('url1');
		$description1 = $req->input('description1');
		
		$title2 = $req->input('title2');
		$url2 = $req->input('url2');
		$description2 = $req->input('description2');
		
		$title3 = $req->input('title3');
		$url3 = $req->input('url3');
		$description3 = $req->input('description3');
		
		$title4 = $req->input('title4');
		$url4 = $req->input('url4');
		$description4 = $req->input('description4');
		
		$title5 = $req->input('title5');
		$url5 = $req->input('url5');
		$description5 = $req->input('description5');

DB::table("qrcodess")->delete();
		$data1 = array("title"=>$title1,"url"=>$url1,"description"=>$description1);
		DB::table("qrcodess")->insert($data1);
		$data2 = array("title"=>$title2,"url"=>$url2,"description"=>$description2);
		DB::table("qrcodess")->insert($data2);
		$data3 = array("title"=>$title3,"url"=>$url3,"description"=>$description3);
		DB::table("qrcodess")->insert($data3);
		$data4 = array("title"=>$title4,"url"=>$url4,"description"=>$description4);
		DB::table("qrcodess")->insert($data4);
		$data5 = array("title"=>$title5,"url"=>$url5,"description"=>$description5);
		DB::table("qrcodess")->insert($data5);

		   return redirect('/');
	}
}


