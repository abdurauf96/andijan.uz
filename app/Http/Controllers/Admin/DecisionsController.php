<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Decision;
use Illuminate\Http\Request;

class DecisionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $decisions = Decision::latest()->paginate(10);
        return view('admin.decisions.index', compact('decisions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.decisions.create');
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
        $this->validate($request, [
			'title_uz' => 'required'
		]);
        $requestData = $request->all();
        if($request->hasFile('file')){
            $file=$request->file('file');
            $filename=time().$file->getClientOriginalName();
            $path='admin/files/decisions';
            $file->move($path, $filename);
            $requestData['file']=$filename;
        }

        Decision::create($requestData);

        return redirect('admin/decisions')->with('flash_message', 'Decision added!');
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
        $decision = Decision::findOrFail($id);

        return view('admin.decisions.show', compact('decision'));
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
        $decision = Decision::findOrFail($id);

        return view('admin.decisions.edit', compact('decision'));
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
        $this->validate($request, [
			'title_uz' => 'required'
		]);
        $requestData = $request->all();
        if($request->hasFile('file')){
            $file=$request->file('file');
            $filename=time().$file->getClientOriginalName();
            $path='admin/files/decisions';
            $file->move($path, $filename);
            $requestData['file']=$filename;
        }
        $decision = Decision::findOrFail($id);
        $decision->update($requestData);

        return redirect('admin/decisions')->with('flash_message', 'Decision updated!');
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
        Decision::destroy($id);

        return redirect('admin/decisions')->with('flash_message', 'Decision deleted!');
    }
}
