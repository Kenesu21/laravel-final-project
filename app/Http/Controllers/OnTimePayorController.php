<?php

namespace App\Http\Controllers;
use App\Models\OnTimePayor;
use Illuminate\Http\Request;

class OnTimePayorController extends Controller
{
    public function index(){
        $lendings = OnTimePayor:: orderBy('id','desc')->paginate(5);
        return view('debtors.index',compact('lendings'));
    }
    public function create(){
        return view('debtors.create');
    }
    public function store(Request $request){
        $request->validate([
        'name'=>'required',
        'month'=>'required',
        'Amount'=>'required',
        'Remarks'=>'required',
    ]);
    OnTimePayor::create($request->post());
    return redirect()->route('debtors.index')->with('success','Ontime Payor Added Successfully.');
 }

    public function show(OnTimePayor $payor)
    {
        return view('debtors.show',compact('payor'));
    }
    public function edit(OnTimePayor $payor)
    {
        return view('debtors.edit',compact('payor'));
    }
    public function update(Request $request, OnTimePayor $payor)
    {
        $request->validate([
            'name' => 'required',
            'month' => 'required',
            'Amount' => 'required',
            'Remarks' => 'required',
            
        ]);
        //$student->fill($request->post())->save();

        $payor->fill([
            'name' => $request->Borrower_Name,
            'month' => $request->Date_of_Transaction,
            'Amount' => $request->Amount_of_Money_Borrowed,
            'Remarks' =>$request->Remarks,
        ])->save();

        return redirect()->route('debtors.index')->with('success','On Time Payor updated successfully');
    }
    public function destroy(OnTimePayor $payor)
    {
        $payor->delete();
        return redirect()->route('debtors.index')->with('success','Deleted Successfully');
    }
}

