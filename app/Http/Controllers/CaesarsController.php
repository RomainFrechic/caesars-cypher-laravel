<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Caesarscypher;


class CaesarsController extends Controller
{
   public function getCaesars(){
		$caesars = \App\Caesarscypher::all();
		return view('caesarscypherView.caesars',['caesarsRome'=>$caesars]);
	}


public function postRequest(Request $request){
		
		$caesars = new Caesarscypher;
		$caesars->id =  $request->id;
		$caesars->identifiant =  $request->identifiant;
		$caesars->password =  $request->password;
		$caesars->save();
		return back();
	}
	
	public function getShowCaesars(){
		$caesars = Caesarscypher::all();
		return view('caesarscypherView.caesars',['caesarsRome'=>$caesars]);
	}

}
