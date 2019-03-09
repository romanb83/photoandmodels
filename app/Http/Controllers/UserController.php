<?php

namespace PhotoModels\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    /*public function getModel($id){
		return view('model');
	}
	
	public function getPhotografer($id){
		return view('photografer');
	}
	
	public function getStudio($id){
		return view('studio');
	}
	*/
	public function addUser(){
		echo 'addUser';
	}
	
	public function showUser($category, $id){
		echo $category;
		echo $id;
	}
	
	public function showAll($category){
		echo 'Category: ';
		echo $category;
	}
}
