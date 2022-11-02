<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Rekvizit;
use Illuminate\Http\Request;

class RekvizitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $rekvizits = Rekvizit::latest()->paginate(10);
        return view('admin.rekvizits.index', compact('rekvizits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.rekvizits.create');
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
            $image=time().$file->getClientOriginalName();
            $path='admin/files/rekvizits';
            $file->move($path, $image);
            $requestData['file']=$path.'/'.$image;
        }
        Rekvizit::create($requestData);

        return redirect('admin/rekvizits')->with('flash_message', 'Rekvizit added!');
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
        $rekvizit = Rekvizit::findOrFail($id);

        return view('admin.rekvizits.show', compact('rekvizit'));
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
        $rekvizit = Rekvizit::findOrFail($id);

        return view('admin.rekvizits.edit', compact('rekvizit'));
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
            $image=time().$file->getClientOriginalName();
            $path='admin/files/rekvizits';
            $file->move($path, $image);
            $requestData['file']=$path.'/'.$image;
        }
        $rekvizit = Rekvizit::findOrFail($id);
        $rekvizit->update($requestData);

        return redirect('admin/rekvizits')->with('flash_message', 'Rekvizit updated!');
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
        Rekvizit::destroy($id);

        return redirect('admin/rekvizits')->with('flash_message', 'Rekvizit deleted!');
    }
}
