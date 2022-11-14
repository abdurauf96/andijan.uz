<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\City;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $cities = City::latest()->paginate(10);
        return view('admin.cities.index', compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.cities.create');
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

        if($request->hasFile('hokim_image')){
            $file=$request->file('hokim_image');
            $filename=time().$file->getClientOriginalName();
            $path='admin/images/cities';
            $file->move(public_path($path), $filename);
            $requestData['hokim_image']=$path.'/'.$filename;
        }

        if($request->hasFile('statute')){
            $file=$request->file('statute');
            $filename=time().$file->getClientOriginalName();
            $path='admin/files/cities';
            $file->move(public_path($path), $filename);
            $requestData['statute']=$path.'/'.$filename;
        }

        if($request->hasFile('decision')){
            $file=$request->file('decision');
            $filename=time().$file->getClientOriginalName();
            $path='admin/files/decisions';
            $file->move(public_path($path), $filename);
            $requestData['decision']=$path.'/'.$filename;
        }

        City::create($requestData);

        return redirect('admin/cities')->with('flash_message', 'City added!');
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
        $city = City::findOrFail($id);

        return view('admin.cities.show', compact('city'));
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
        $city = City::findOrFail($id);

        return view('admin.cities.edit', compact('city'));
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

        if($request->hasFile('hokim_image')){
            $file=$request->file('hokim_image');
            $filename=time().$file->getClientOriginalName();
            $path='admin/images/cities';
            $file->move(public_path($path), $filename);
            $requestData['hokim_image']=$path.'/'.$filename;
        }

        if($request->hasFile('statute')){
            $file=$request->file('statute');
            $filename=time().$file->getClientOriginalName();
            $path='admin/files/cities';
            $file->move(public_path($path), $filename);
            $requestData['statute']=$path.'/'.$filename;
        }

        if($request->hasFile('decision')){
            $file=$request->file('decision');
            $filename=time().$file->getClientOriginalName();
            $path='admin/files/decisions';
            $file->move(public_path($path), $filename);
            $requestData['decision']=$path.'/'.$filename;
        }

        $city = City::findOrFail($id);
        $city->update($requestData);

        return redirect('admin/cities')->with('flash_message', 'City updated!');
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
        City::destroy($id);

        return redirect('admin/cities')->with('flash_message', 'City deleted!');
    }
}
