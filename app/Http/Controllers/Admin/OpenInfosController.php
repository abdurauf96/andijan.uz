<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\OpenInfo;
use Illuminate\Http\Request;

class OpenInfosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $openinfos = OpenInfo::latest()->paginate(10);
        return view('admin.open-infos.index', compact('openinfos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.open-infos.create');
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
        
        OpenInfo::create($requestData);

        return redirect('admin/open-infos')->with('flash_message', 'OpenInfo added!');
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
        $openinfo = OpenInfo::findOrFail($id);

        return view('admin.open-infos.show', compact('openinfo'));
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
        $openinfo = OpenInfo::findOrFail($id);

        return view('admin.open-infos.edit', compact('openinfo'));
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
        
        $openinfo = OpenInfo::findOrFail($id);
        $openinfo->update($requestData);

        return redirect('admin/open-infos')->with('flash_message', 'OpenInfo updated!');
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
        OpenInfo::destroy($id);

        return redirect('admin/open-infos')->with('flash_message', 'OpenInfo deleted!');
    }
}
