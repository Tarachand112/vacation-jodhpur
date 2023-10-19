<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class WebController extends Controller
{
	function index() {
		return view('web.index');
	}

	function about() {
		return view('web.about');
	}

	function contact() {
		return view('web.contact');
	}

	function school() {
		return view('web.school');
	}

	function gallery() {
		return view('web.gallery');
	}
}
