<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\PressPage;
use Illuminate\Http\Request;

class PressPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $presspages = PressPage::latest()->paginate(10);
        return view('admin.press-pages.index', compact('presspages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.press-pages.create');
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

        PressPage::create($requestData);

        return redirect('admin/press-pages')->with('flash_message', 'PressPage added!');
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
        $presspage = PressPage::findOrFail($id);

        return view('admin.press-pages.show', compact('presspage'));
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
        $presspage = PressPage::findOrFail($id);

        return view('admin.press-pages.edit', compact('presspage'));
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

        $presspage = PressPage::findOrFail($id);
        $presspage->update($requestData);

        return redirect('admin/press-pages')->with('flash_message', 'PressPage updated!');
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
        PressPage::destroy($id);

        return redirect('admin/press-pages')->with('flash_message', 'PressPage deleted!');
    }
}
