<?php namespace App\Http\Controllers;

use Interpro\QuickStorage\Concept\QueryAgent;

class FrontController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return view('front.index.index');
	}
	public function getProgram(QueryAgent $queryAgent, $slug)
	{
		$program = $queryAgent->getGroupItemBySlug('dom_program','programs',$slug);
		return view('front.programs.program',[
			'program' => $program
		]);
	}
	public function getReconstructs(QueryAgent $queryAgent )
	{
		$rec = $queryAgent->getBlock('reconstruction',[],[]);
		return view('front.other.other',[
			'other' => $rec
		]);
	}
	public function getContacts(QueryAgent $queryAgent)
	{
		$cont = $queryAgent->getBlock('contacts',[],[]);
		return view('front.other.other',[
			'other' => $cont
		]);
	}

}
