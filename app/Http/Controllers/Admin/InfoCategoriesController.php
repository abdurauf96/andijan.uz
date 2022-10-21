<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\InfoCategory;
use Illuminate\Http\Request;

class InfoCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 10;

        if (!empty($keyword)) {
            $infocategories = InfoCategory::where('title_uz', 'LIKE', "%$keyword%")
                ->orWhere('title_ru', 'LIKE', "%$keyword%")
                ->orWhere('title_en', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $infocategories = InfoCategory::latest()->paginate($perPage);
        }

        return view('admin.info-categories.index', compact('infocategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.info-categories.create');
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
			'title_uz' => 'required',
		]);

        $requestData = $request->all();

        if($request->hasFile('image')){
            $file=$request->file('image');
            $image=time().$file->getClientOriginalName();
            $path='admin/images/info-categories';
            $file->move($path, $image);
            $requestData['image']=$image;
        }

        InfoCategory::create($requestData);

        return redirect('admin/info-categories')->with('flash_message', 'InfoCategory added!');
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
        $infocategory = InfoCategory::findOrFail($id);

        return view('admin.info-categories.show', compact('infocategory'));
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
        $infocategory = InfoCategory::findOrFail($id);

        return view('admin.info-categories.edit', compact('infocategory'));
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
			'title_uz' => 'required',
		]);
        $requestData = $request->all();

        if($request->hasFile('image')){
            $file=$request->file('image');
            $image=time().$file->getClientOriginalName();
            $path='admin/images/info-categories';
            $file->move($path, $image);
            $requestData['image']=$image;
        }

        $infocategory = InfoCategory::findOrFail($id);
        $infocategory->update($requestData);

        return redirect('admin/info-categories')->with('flash_message', 'InfoCategory updated!');
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
        InfoCategory::destroy($id);

        return redirect('admin/info-categories')->with('flash_message', 'InfoCategory deleted!');
    }
}
