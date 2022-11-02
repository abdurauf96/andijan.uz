<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\ReceptionTime;
use Illuminate\Http\Request;

class ReceptionTimesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $receptiontimes = ReceptionTime::latest()->paginate(10);
        return view('admin.reception-times.index', compact('receptiontimes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.reception-times.create');
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
            $path='admin/images/reception-times';
            $file->move($path, $image);
            $requestData['image']=$path.'/'.$image;
        }
        ReceptionTime::create($requestData);

        return redirect('admin/reception-times')->with('flash_message', 'ReceptionTime added!');
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
        $receptiontime = ReceptionTime::findOrFail($id);

        return view('admin.reception-times.show', compact('receptiontime'));
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
        $receptiontime = ReceptionTime::findOrFail($id);

        return view('admin.reception-times.edit', compact('receptiontime'));
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
            $path='admin/images/reception-times';
            $file->move($path, $image);
            $requestData['image']=$path.'/'.$image;
        }
        $receptiontime = ReceptionTime::findOrFail($id);
        $receptiontime->update($requestData);

        return redirect('admin/reception-times')->with('flash_message', 'ReceptionTime updated!');
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
        ReceptionTime::destroy($id);

        return redirect('admin/reception-times')->with('flash_message', 'ReceptionTime deleted!');
    }
}
