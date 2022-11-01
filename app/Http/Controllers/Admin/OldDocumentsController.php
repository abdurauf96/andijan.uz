<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\OldDocument;
use Illuminate\Http\Request;

class OldDocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $olddocuments = OldDocument::latest()->paginate(10);
        return view('admin.old-documents.index', compact('olddocuments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.old-documents.create');
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
            $path='admin/files/old-documents';
            $image=time().$file->getClientOriginalName();
            $file->move($path, $image);
            $requestData['file']=$path.'/'.$image;
        }
        OldDocument::create($requestData);

        return redirect('admin/old-documents')->with('flash_message', 'OldDocument added!');
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
        $olddocument = OldDocument::findOrFail($id);

        return view('admin.old-documents.show', compact('olddocument'));
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
        $olddocument = OldDocument::findOrFail($id);

        return view('admin.old-documents.edit', compact('olddocument'));
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
            $path='admin/files/old-documents';
            $image=time().$file->getClientOriginalName();
            $file->move($path, $image);
            $requestData['file']=$path.'/'.$image;
        }
        $olddocument = OldDocument::findOrFail($id);
        $olddocument->update($requestData);

        return redirect('admin/old-documents')->with('flash_message', 'OldDocument updated!');
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
        OldDocument::destroy($id);

        return redirect('admin/old-documents')->with('flash_message', 'OldDocument deleted!');
    }
}
