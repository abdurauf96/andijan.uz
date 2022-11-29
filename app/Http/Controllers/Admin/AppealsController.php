<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Appeal;
use Illuminate\Http\Request;

class AppealsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $appeals = Appeal::latest()->paginate(10);
        return view('admin.appeals.index', compact('appeals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.appeals.create');
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
			'name' => 'required',
			'addres' => 'required',
			'phone' => 'required',
			'body' => 'required',
		]);
        $requestData = $request->all();

        Appeal::create($requestData);

        return redirect('admin/appeals')->with('flash_message', 'Appeal added!');
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
        $appeal = Appeal::findOrFail($id);

        return view('admin.appeals.show', compact('appeal'));
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
        $appeal = Appeal::findOrFail($id);

        return view('admin.appeals.edit', compact('appeal'));
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
			'name' => 'required'
		]);
        $requestData = $request->all();

        $appeal = Appeal::findOrFail($id);
        $appeal->update($requestData);

        return redirect('admin/appeals')->with('flash_message', 'Appeal updated!');
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
        Appeal::destroy($id);

        return redirect('admin/appeals')->with('flash_message', 'Appeal deleted!');
    }
}
