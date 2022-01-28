<?php

namespace App\Http\Controllers\Admin;

use App\admin\MaterialInvoice;
use App\Admin\Supplier;
use App\Http\Requests\ MaterialInvoiceRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MaterialInvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return string
     */
    public function index(Request $request)
    {
        return view('admin.mat_invoices.index',
            ['materialInvoices' => MaterialInvoice::paginate(10)

                ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.mat_invoices.create',['supplier'=>Supplier::all()]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(MaterialInvoice $request)
    {

        $validation = $request->validate([
            'name' => 'required|unique:materialInvoices'
        ],[
            'name.required' => 'خطأ',
            'name.unique' => 'مكرر',
        ]);
        MaterialInvoice::create($request->all());
        return redirect(route('admin.mat_invoices.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\admin\materialInvoice  $materialInvoice
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show(materialInvoice $materialInvoice)
    {
        return view('mat_invoices.show',
            ['materialInvoice'=> $materialInvoice]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\admin\materialInvoice  $materialInvoice
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit(materialInvoice $materialInvoice)
    {

        return view('admin.materialInvoices.edit',['materialInvoice'=>$materialInvoice]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\admin\materialInvoice  $materialInvoice
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update( MaterialInvoiceRequest $request, materialInvoice $materialInvoice)
    {
        $materialInvoice->update($request->all());
        return view('admin.materialInvoices.show',
            ['materialInvoice'=> $materialInvoice]
        );

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\admin\materialInvoice  $materialInvoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(MaterialInvoice $materialInvoice)
    {
        $materialInvoice->delete();
        return redirect(route('admin.materialInvoices.index'));
    }
}
