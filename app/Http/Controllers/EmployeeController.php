<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $employees = Employee::paginate(10);

        return view('layouts.team.index', [
            'employees' => $employees
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        return view('layouts.team.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(EmployeeRequest $request)
    {

        $employee = Employee::create($request->all());

        return \redirect()->route('employees.index');
    }

    /**
     * Display the specified resource.
     *
     *
     */
    public function show(Employee $employee)
    {
        return view('layouts.team.show', \compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     *
     */
    public function edit(Employee $employee)
    {
        return view('layouts.team.edit', \compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     *
     */
    public function update(EmployeeRequest $request, Employee $employee)
    {
        $employee->update($request->all());

        return \redirect()->route('employees.show', $employee);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return \redirect()->route('employees.index');
    }
}
