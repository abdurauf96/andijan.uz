<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $organizations = Organization::latest()->paginate(10);
        return view('admin.organizations.index', compact('organizations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.organizations.create');
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
            $path='admin/images/organizations';
            $image=time().$file->getClientOriginalName();
            $file->move(public_path($path), $image);
            $requestData['image']=$path.'/'.$image;
        }
        if($request->hasFile('director_image')){
            $file=$request->file('director_image');
            $path='admin/images/organizations';
            $image=time().$file->getClientOriginalName();
            $file->move(public_path($path), $image);
            $requestData['image']=$path.'/'.$image;
        }
        Organization::create($requestData);

        return redirect('admin/organizations')->with('flash_message', 'Organization added!');
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
        $organization = Organization::findOrFail($id);

        return view('admin.organizations.show', compact('organization'));
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
        $organization = Organization::findOrFail($id);

        return view('admin.organizations.edit', compact('organization'));
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
            $path='admin/images/organizations';
            $image=time().$file->getClientOriginalName();
            $file->move(public_path($path), $image);
            $requestData['image']=$path.'/'.$image;
        }
        if($request->hasFile('director_image')){
            $file=$request->file('director_image');
            $path='admin/images/organizations';
            $image=time().$file->getClientOriginalName();
            $file->move(public_path($path), $image);
            $requestData['director_image']=$path.'/'.$image;
        }

        if($request->hasFile('statute')){
            $file=$request->file('statute');
            $path='admin/images/organizations';
            $image=time().$file->getClientOriginalName();
            $file->move($path, $image);
            $requestData['statute']=$path.'/'.$image;
        }

        $organization = Organization::findOrFail($id);
        $organization->update($requestData);

        return redirect('admin/organizations')->with('flash_message', 'Organization updated!');
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
        Organization::destroy($id);

        return redirect('admin/organizations')->with('flash_message', 'Organization deleted!');
    }
}
