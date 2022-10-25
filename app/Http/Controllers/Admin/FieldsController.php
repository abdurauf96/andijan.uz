<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Field;
use Illuminate\Http\Request;

class FieldsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $fields = Field::latest()->paginate(10);

        return view('admin.fields.index', compact('fields'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.fields.create');
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
            $path='admin/images/fields';
            $file->move($path, $image);
            $requestData['image']=$image;
        }

        Field::create($requestData);

        return redirect('admin/fields')->with('flash_message', 'Field added!');
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
        $field = Field::findOrFail($id);

        return view('admin.fields.show', compact('field'));
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
        $field = Field::findOrFail($id);

        return view('admin.fields.edit', compact('field'));
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
            $path='admin/images/fields';
            $file->move($path, $image);
            $requestData['image']=$image;
        }

        $field = Field::findOrFail($id);
        $field->update($requestData);

        return redirect('admin/fields')->with('flash_message', 'Field updated!');
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
        Field::destroy($id);

        return redirect('admin/fields')->with('flash_message', 'Field deleted!');
    }

    public function imageUpload(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
            $request->file('upload')->move(public_path('admin/images/fields/'), $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('admin/images/fields/'.$fileName);
            $msg = 'Image successfully uploaded';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }
}
