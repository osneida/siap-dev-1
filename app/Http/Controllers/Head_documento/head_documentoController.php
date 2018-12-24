<?php

namespace App\Http\Controllers\Head_documento;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\head_documento;
use Illuminate\Http\Request;

class head_documentoController extends Controller
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
            $head_documento = head_documento::where('numero_revision', 'LIKE', "%$keyword%")
                ->orWhere('elaborado_por', 'LIKE', "%$keyword%")
                ->orWhere('revisado_por', 'LIKE', "%$keyword%")
                ->orWhere('cargo_elaborado', 'LIKE', "%$keyword%")
                ->orWhere('cargo_revisado', 'LIKE', "%$keyword%")
                ->orWhere('fecha_revision', 'LIKE', "%$keyword%")
                ->orWhere('fecha_creacion', 'LIKE', "%$keyword%")
                ->orWhere('estatus', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $head_documento = head_documento::latest()->paginate($perPage);
        }

        return view('head_documento.head_documento.index', compact('head_documento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('head_documento.head_documento.create');
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
        
        head_documento::create($requestData);

        return redirect('head_documento')->with('flash_message', 'head_documento added!');
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
        $head_documento = head_documento::findOrFail($id);

        return view('head_documento.head_documento.show', compact('head_documento'));
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
        $head_documento = head_documento::findOrFail($id);

        return view('head_documento.head_documento.edit', compact('head_documento'));
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
        
        $head_documento = head_documento::findOrFail($id);
        $head_documento->update($requestData);

        return redirect('head_documento')->with('flash_message', 'head_documento updated!');
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
        head_documento::destroy($id);

        return redirect('head_documento')->with('flash_message', 'head_documento deleted!');
    }
}
