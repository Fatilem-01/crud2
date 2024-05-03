<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee ;
use Illuminate\Pagination;


class employeesController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //retrieve all employees from the db and passes them to the view
    public function index()
{
    $employees = Employee::paginate(10);
    return view('employees.index')->with('employees', $employees);
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        employee::create($input);
        return redirect('employee')->with('success','employee added !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = employee::find($id);
        return view('employees.show')->with('employees',$employee);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // Show the form to edit an existing employee.
    public function edit($id)
    {
        $employee = employee::find($id);
        return view('employees.edit')->with('employees', $employee);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // Save changes to an existing employee.
    public function update(Request $request, $id)
    {
        $employee = employee::find($id);
        $input = $request->all();
        $employee->update($input);
        return redirect('employee')->with('flash-message' ,'employee updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        employee::destroy($id);
        return redirect('employee')->with('flash_message' , 'Employee deleted!');
    }
}
