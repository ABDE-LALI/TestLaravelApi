<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $emloyees = Employee::orderBy("id", "desc")->get();
        return response()->json($emloyees);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $employee = Employee::create($data);
        return response()->json($employee);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $employee = Employee::findorFail($id);
        return response()->json($employee);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $employee = Employee::findorFail($id);
        $employee->update($data);
        return response()->json($employee);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Employee::findorFail($id);
        $employee->delete();
        return response()->json([
            'message'
            =>
            'Employee deleted successfully!'
        ]);
    }
}




