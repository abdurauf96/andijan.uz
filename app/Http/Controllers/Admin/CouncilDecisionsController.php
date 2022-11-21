<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\CouncilDecision;
use Illuminate\Http\Request;

class CouncilDecisionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $councildecisions = CouncilDecision::latest()->paginate(10);
        return view('admin.council-decisions.index', compact('councildecisions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.council-decisions.create');
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
            $path='admin/files/council-decisions';
            $image=time().$file->getClientOriginalName();
            $file->move(public_path($path), $image);
            $requestData['file']=$path.'/'.$image;
        }
        CouncilDecision::create($requestData);

        return redirect('admin/council-decisions')->with('flash_message', 'CouncilDecision added!');
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
        $councildecision = CouncilDecision::findOrFail($id);

        return view('admin.council-decisions.show', compact('councildecision'));
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
        $councildecision = CouncilDecision::findOrFail($id);

        return view('admin.council-decisions.edit', compact('councildecision'));
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
            $path='admin/files/council-decisions';
            $image=time().$file->getClientOriginalName();
            $file->move(public_path($path), $image);
            $requestData['file']=$path.'/'.$image;
        }
        $councildecision = CouncilDecision::findOrFail($id);
        $councildecision->update($requestData);

        return redirect('admin/council-decisions')->with('flash_message', 'CouncilDecision updated!');
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
        CouncilDecision::destroy($id);

        return redirect('admin/council-decisions')->with('flash_message', 'CouncilDecision deleted!');
    }
}
