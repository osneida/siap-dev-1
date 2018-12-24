<?php

namespace App\Http\Controllers\Aspecto_familiar;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\aspecto_familiar;
use Illuminate\Http\Request;

class aspecto_familiarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $aspecto_familiar = aspecto_familiar::where('parentesco', 'LIKE', "%$keyword%")
                ->orWhere('nombre', 'LIKE', "%$keyword%")
                ->orWhere('edad', 'LIKE', "%$keyword%")
                ->orWhere('ocupacion', 'LIKE', "%$keyword%")
                ->orWhere('domicilio', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $aspecto_familiar = aspecto_familiar::latest()->paginate($perPage);
        }

        return view('aspecto_familiar.aspecto_familiar.index', compact('aspecto_familiar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('aspecto_familiar.aspecto_familiar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        aspecto_familiar::create($requestData);

        return redirect('aspecto_familiar')->with('flash_message', 'aspecto_familiar added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $aspecto_familiar = aspecto_familiar::findOrFail($id);

        return view('aspecto_familiar.aspecto_familiar.show', compact('aspecto_familiar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $aspecto_familiar = aspecto_familiar::findOrFail($id);

        return view('aspecto_familiar.aspecto_familiar.edit', compact('aspecto_familiar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $aspecto_familiar = aspecto_familiar::findOrFail($id);
        $aspecto_familiar->update($requestData);

        return redirect('aspecto_familiar')->with('flash_message', 'aspecto_familiar updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        aspecto_familiar::destroy($id);

        return redirect('aspecto_familiar')->with('flash_message', 'aspecto_familiar deleted!');
    }
}
