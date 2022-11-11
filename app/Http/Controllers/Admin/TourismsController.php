<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Tourism;
use Illuminate\Http\Request;

class TourismsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $tourisms = Tourism::latest()->paginate(10);
        return view('admin.tourisms.index', compact('tourisms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.tourisms.create');
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
        if($request->hasFile('image')){
            $file=$request->file('image');
            $image=time().$file->getClientOriginalName();
            $path='admin/images/tourisms';
            $file->move(public_path($path), $image);
            $requestData['image']=$path.'/'.$image;
        }
        Tourism::create($requestData);

        return redirect('admin/tourisms')->with('flash_message', 'Tourism added!');
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
        $tourism = Tourism::findOrFail($id);

        return view('admin.tourisms.show', compact('tourism'));
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
        $tourism = Tourism::findOrFail($id);

        return view('admin.tourisms.edit', compact('tourism'));
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
        if($request->hasFile('image')){
            $file=$request->file('image');
            $image=time().$file->getClientOriginalName();
            $path='admin/images/tourisms';
            $file->move(public_path($path), $image);
            $requestData['image']=$path.'/'.$image;
        }
        $tourism = Tourism::findOrFail($id);
        $tourism->update($requestData);

        return redirect('admin/tourisms')->with('flash_message', 'Tourism updated!');
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
        Tourism::destroy($id);

        return redirect('admin/tourisms')->with('flash_message', 'Tourism deleted!');
    }
}
