<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LatePayor;

class LatePayorController extends Controller
{
    public function index2(){
        $lendings = LatePayor:: orderBy('id','desc')->paginate(5);
        return view('debtors.index2',compact('lendings'));
    }
    public function create2(){
        return view('debtors.create2');
    }
    public function store(Request $request){
        $request->validate([
        'name'=>'required',
        'month'=>'required',
        'Amount'=>'required',
        'Remarks'=>'required'
    ]);
    OnTimePayor::create($request->post());
    return redirect()->route('debtors.index2')->with('success','Late Payor Added Successfully.');
    
 }

    public function show(LatePayor $pay)
    {
        return view('debtors.show',compact('pay'));
    }
    public function edit(LatePayor $pay)
    {
        return view('debtors.edit',compact('pay'));
    }
    public function update(Request $request, LatePayor $pay)
    {
        $request->validate([
            'name' => 'required',
            'Date_of_Transaction' => 'required',
            'Amount_of_Money_Borrowed' => 'required',
            'Remarks' => 'required',
            
        ]);
        //$student->fill($request->post())->save();

        $pay->fill([
            'Borrower_Name' => $request->Borrower_Name,
            'Date_of_Transaction' => $request->Date_of_Transaction,
            'Amount_of_Money_Borrowed' => $request->Amount_of_Money_Borrowed,
            'Remarks' =>$request->Remarks,
        ])->save();

        return redirect()->route('debtors.index2')->with('success','Late Payor updated successfully');
    }
    public function destroy(LatePayor $pay)
    {
        $pay->delete();
        return redirect()->route('debtors.index2')->with('success','Deleted Successfully');
    }
}
