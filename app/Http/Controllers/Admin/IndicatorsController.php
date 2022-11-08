<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Indicator;
use Illuminate\Http\Request;

class IndicatorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $indicators = Indicator::latest()->paginate(10);
        return view('admin.indicators.index', compact('indicators'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.indicators.create');
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
            $filename=time().$file->getClientOriginalName();
            $path='admin/files/indicators';
            $file->move(public_path($path), $filename);
            $requestData['file']=$path.'/'.$filename;
        }

        Indicator::create($requestData);

        return redirect('admin/indicators')->with('flash_message', 'Indicator added!');
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
        $indicator = Indicator::findOrFail($id);

        return view('admin.indicators.show', compact('indicator'));
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
        $indicator = Indicator::findOrFail($id);

        return view('admin.indicators.edit', compact('indicator'));
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
            $filename=time().$file->getClientOriginalName();
            $path='admin/files/indicators';
            $file->move(public_path($path), $filename);
            $requestData['file']=$path.'/'.$filename;
        }
        $indicator = Indicator::findOrFail($id);
        $indicator->update($requestData);

        return redirect('admin/indicators')->with('flash_message', 'Indicator updated!');
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
        Indicator::destroy($id);

        return redirect('admin/indicators')->with('flash_message', 'Indicator deleted!');
    }
}
