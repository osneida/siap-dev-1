<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;
use App\Obligacion;
use App\Tipoobligacion;


class ObligacionController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function manageCategory()
    {
        $categories = Category::where('parent_id', '=', 0)->get();
        $allCategories = Category::pluck('title','id')->all();
        return view('obligaciones.categoryTreeview',compact('categories','allCategories'));
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function addCategory(Request $request)
    {
        $this->validate($request, [
        		'title' => 'required',
        	]);
        $input = $request->all();
        $input['parent_id'] = empty($input['parent_id']) ? 0 : $input['parent_id'];
        
        Category::create($input);
        return back()->with('success', 'New Category added successfully.');
    }



    public function index()
    {
        $obligaciones = Obligacion::all()->sortBy('id');
        $tipoobligaciones = Tipoobligacion::all();
        $title = 'Listado de Obligaciones';       
        return view('obligaciones.index',compact('title','obligaciones','tipoobligaciones'));
    }

    public function create()
    {
        $obligaciones = Obligacion::all()->sortBy('id');;
        $tipoobligaciones = Tipoobligacion::all()->sortBy('id');;
        return view('obligaciones.create',compact('obligaciones','tipoobligaciones'));
    }



}