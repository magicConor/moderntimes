<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	//
	public function about(){

		$first = 'Conor';

		$second = 'O`Reilly';


		/*passing data to the about view using phps "Compact()" function. 
		each string in the parenthesis tries to match up to a variable name*/
		return view('pages.about', compact('first', 'second'));
	}

}
