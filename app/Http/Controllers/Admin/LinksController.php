<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Link;
use Illuminate\Http\Request;

class LinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $perPage = 10;
        $links = Link::latest()->paginate($perPage);

        return view('admin.links.index', compact('links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.links.create');
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
			'link' => 'required'
		]);
        $requestData = $request->all();

        if($request->hasFile('image')){
            $file=$request->file('image');
            $image=time().$file->getClientOriginalName();
            $path='admin/images/links';
            $file->move(public_path($path), $image);
            $requestData['image']=$path.'/'.$image;
        }

        Link::create($requestData);

        return redirect('admin/links')->with('flash_message', 'Link added!');
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
        $link = Link::findOrFail($id);

        return view('admin.links.show', compact('link'));
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
        $link = Link::findOrFail($id);

        return view('admin.links.edit', compact('link'));
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
			'link' => 'required'
		]);
        $requestData = $request->all();

        if($request->hasFile('image')){
            $file=$request->file('image');
            $image=time().$file->getClientOriginalName();
            $path='admin/images/links';
            $file->move(public_path($path), $image);
            $requestData['image']=$path.'/'.$image;
        }

        $link = Link::findOrFail($id);
        $link->update($requestData);

        return redirect('admin/links')->with('flash_message', 'Link updated!');
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
        Link::destroy($id);

        return redirect('admin/links')->with('flash_message', 'Link deleted!');
    }
}
