<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Comission;
use App\Models\ComissionMember;
use Illuminate\Http\Request;

class ComissionMembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $comissionmembers = ComissionMember::latest()->paginate(10);
        return view('admin.comission-members.index', compact('comissionmembers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $comissions=Comission::all();
        return view('admin.comission-members.create', compact('comissions'));
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
            $path='admin/images/comission-members';
            $file->move(public_path($path), $filename);
            $requestData['image']=$path.'/'.$filename;
        }
        ComissionMember::create($requestData);

        return redirect('admin/comission-members')->with('flash_message', 'ComissionMember added!');
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
        $comissionmember = ComissionMember::findOrFail($id);

        return view('admin.comission-members.show', compact('comissionmember'));
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
        $comissionmember = ComissionMember::findOrFail($id);
        $comissions=Comission::all();
        return view('admin.comission-members.edit', compact('comissionmember', 'comissions'));
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
            $path='admin/images/comission-members';
            $file->move(public_path($path), $filename);
            $requestData['image']=$path.'/'.$filename;
        }
        $comissionmember = ComissionMember::findOrFail($id);
        $comissionmember->update($requestData);

        return redirect('admin/comission-members')->with('flash_message', 'ComissionMember updated!');
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
        ComissionMember::destroy($id);

        return redirect('admin/comission-members')->with('flash_message', 'ComissionMember deleted!');
    }
}
