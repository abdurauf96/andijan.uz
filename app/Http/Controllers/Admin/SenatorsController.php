<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Senator;
use Illuminate\Http\Request;

class SenatorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $senators = Senator::latest()->paginate(10);
        return view('admin.senators.index', compact('senators'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.senators.create');
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
			'name_uz' => 'required'
		]);
        $requestData = $request->all();
        if($request->hasFile('image')){
            $file=$request->file('image');
            $filename=time().$file->getClientOriginalName();
            $path='admin/images/senators';
            $file->move(public_path($path), $filename);
            $requestData['image']=$path.'/'.$filename;
        }
        Senator::create($requestData);

        return redirect('admin/senators')->with('flash_message', 'Senator added!');
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
        $senator = Senator::findOrFail($id);

        return view('admin.senators.show', compact('senator'));
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
        $senator = Senator::findOrFail($id);

        return view('admin.senators.edit', compact('senator'));
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
			'name_uz' => 'required'
		]);
        $requestData = $request->all();
        if($request->hasFile('image')){
            $file=$request->file('image');
            $filename=time().$file->getClientOriginalName();
            $path='admin/images/senators';
            $file->move(public_path($path), $filename);
            $requestData['image']=$path.'/'.$filename;
        }
        $senator = Senator::findOrFail($id);
        $senator->update($requestData);

        return redirect('admin/senators')->with('flash_message', 'Senator updated!');
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
        Senator::destroy($id);

        return redirect('admin/senators')->with('flash_message', 'Senator deleted!');
    }
}
