<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Speech;
use Illuminate\Http\Request;

class SpeechesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $speeches = Speech::latest()->paginate(10);
        return view('admin.speeches.index', compact('speeches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.speeches.create');
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
            $path='admin/images/speeches';
            $file->move($path, $image);
            $requestData['image']=$image;
        }
        if($request->hasFile('file')){
            $file=$request->file('file');
            $video=time().'.'.$file->getClientOriginalExtension();
            $path='admin/videos/speeches';
            $file->move($path, $video);
            $requestData['file']=$video;
        }
        Speech::create($requestData);

        return redirect('admin/speeches')->with('flash_message', 'Speech added!');
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
        $speech = Speech::findOrFail($id);

        return view('admin.speeches.show', compact('speech'));
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
        $speech = Speech::findOrFail($id);

        return view('admin.speeches.edit', compact('speech'));
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
            $path='admin/images/speeches';
            $file->move($path, $image);
            $requestData['image']=$image;
        }
        if($request->hasFile('file')){
            $file=$request->file('file');
            $video=time().'.'.$file->getClientOriginalExtension();
            $path='admin/videos/speeches';
            $file->move($path, $video);
            $requestData['file']=$video;
        }

        $speech = Speech::findOrFail($id);
        $speech->update($requestData);

        return redirect('admin/speeches')->with('flash_message', 'Speech updated!');
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
        Speech::destroy($id);

        return redirect('admin/speeches')->with('flash_message', 'Speech deleted!');
    }
}
