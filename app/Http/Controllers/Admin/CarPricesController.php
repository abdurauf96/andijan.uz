<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\CarPrice;
use Illuminate\Http\Request;

class CarPricesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $carprices = CarPrice::latest()->paginate(10);
        return view('admin.car-prices.index', compact('carprices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.car-prices.create');
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
        if($request->hasFile('image')){
            $file=$request->file('image');
            $filename=time().$file->getClientOriginalName();
            $path='admin/images/car-prices';
            $file->move(public_path($path), $filename);
            $requestData['image']=$path.'/'.$filename;
        }
        CarPrice::create($requestData);

        return redirect('admin/car-prices')->with('flash_message', 'CarPrice added!');
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
        $carprice = CarPrice::findOrFail($id);

        return view('admin.car-prices.show', compact('carprice'));
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
        $carprice = CarPrice::findOrFail($id);

        return view('admin.car-prices.edit', compact('carprice'));
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
        if($request->hasFile('image')){
            $file=$request->file('image');
            $filename=time().$file->getClientOriginalName();
            $path='admin/images/car-prices';
            $file->move(public_path($path), $filename);
            $requestData['image']=$path.'/'.$filename;
        }
        $carprice = CarPrice::findOrFail($id);
        $carprice->update($requestData);

        return redirect('admin/car-prices')->with('flash_message', 'CarPrice updated!');
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
        CarPrice::destroy($id);

        return redirect('admin/car-prices')->with('flash_message', 'CarPrice deleted!');
    }
}
