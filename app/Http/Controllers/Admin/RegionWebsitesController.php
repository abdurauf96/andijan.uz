<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\RegionWebsite;
use Illuminate\Http\Request;

class RegionWebsitesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $regionwebsites = RegionWebsite::latest()->paginate(10);
        return view('admin.region-websites.index', compact('regionwebsites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.region-websites.create');
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
        
        $requestData = $request->all();
        
        RegionWebsite::create($requestData);

        return redirect('admin/region-websites')->with('flash_message', 'RegionWebsite added!');
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
        $regionwebsite = RegionWebsite::findOrFail($id);

        return view('admin.region-websites.show', compact('regionwebsite'));
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
        $regionwebsite = RegionWebsite::findOrFail($id);

        return view('admin.region-websites.edit', compact('regionwebsite'));
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
        
        $requestData = $request->all();
        
        $regionwebsite = RegionWebsite::findOrFail($id);
        $regionwebsite->update($requestData);

        return redirect('admin/region-websites')->with('flash_message', 'RegionWebsite updated!');
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
        RegionWebsite::destroy($id);

        return redirect('admin/region-websites')->with('flash_message', 'RegionWebsite deleted!');
    }
}
