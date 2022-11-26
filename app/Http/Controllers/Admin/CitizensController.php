<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Citizen;
use Illuminate\Http\Request;

class CitizensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $citizens = Citizen::latest()->paginate(10);
        return view('admin.citizens.index', compact('citizens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.citizens.create');
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
            $path='admin/files/citizens';
            $file->move(public_path($path), $image);
            $requestData['file']=$path.'/'.$image;
        }
        Citizen::create($requestData);

        return redirect('admin/citizens')->with('flash_message', 'Citizen added!');
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
        $citizen = Citizen::findOrFail($id);

        return view('admin.citizens.show', compact('citizen'));
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
        $citizen = Citizen::findOrFail($id);

        return view('admin.citizens.edit', compact('citizen'));
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
            $path='admin/files/citizens';
            $file->move(public_path($path), $image);
            $requestData['file']=$path.'/'.$image;
        }
        $citizen = Citizen::findOrFail($id);
        $citizen->update($requestData);

        return redirect('admin/citizens')->with('flash_message', 'Citizen updated!');
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
        Citizen::destroy($id);

        return redirect('admin/citizens')->with('flash_message', 'Citizen deleted!');
    }
}
