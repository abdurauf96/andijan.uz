<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Investment;
use Illuminate\Http\Request;

class InvestmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $investments = Investment::latest()->paginate(10);
        return view('admin.investments.index', compact('investments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.investments.create');
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
            $path='admin/images/investments';
            $file->move(public_path($path), $image);
            $requestData['image']=$path.'/'.$image;
        }
        Investment::create($requestData);

        return redirect('admin/investments')->with('flash_message', 'Investment added!');
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
        $investment = Investment::findOrFail($id);

        return view('admin.investments.show', compact('investment'));
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
        $investment = Investment::findOrFail($id);

        return view('admin.investments.edit', compact('investment'));
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
            $path='admin/images/investments';
            $file->move(public_path($path), $image);
            $requestData['image']=$path.'/'.$image;
        }
        $investment = Investment::findOrFail($id);
        $investment->update($requestData);

        return redirect('admin/investments')->with('flash_message', 'Investment updated!');
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
        Investment::destroy($id);

        return redirect('admin/investments')->with('flash_message', 'Investment deleted!');
    }
}
