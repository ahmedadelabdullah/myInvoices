<?php

namespace App\Http\Controllers\Admin;

use App\admin\Supplier;
use App\Http\Requests\SupplierRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return string
     */
    public function index(Request $request)
    {

        return view('admin.suppliers.index',
            ['suppliers' => Supplier::paginate(10)]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(SupplierRequest $request)
    {

        $validation = $request->validate([
            'name' => 'required|unique:suppliers'
        ],[
            'name.required' => 'خطأ',
            'name.unique' => 'مكرر',
        ]);
        Supplier::create($request->all());
        return redirect(route('admin.suppliers.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\admin\Product  $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show(Supplier $supplier)
    {
        return view('admin.suppliers.show',
            ['supplier'=> $supplier]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\admin\Product  $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit(Supplier $supplier)
    {

        return view('admin.suppliers.edit',['supplier'=>$supplier]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\admin\Product  $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(SupplierRequest $request, Supplier $supplier)
    {
        $supplier->update($request->all());
        return view('admin.suppliers.show', ['supplier'=> $supplier]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\admin\Product  $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
        return redirect(route('admin.suppliers.index'));
    }
}
