<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employees as Employee;

class EmployeesController extends Controller
{
    
    public function store(Request $request) {
    $data = $request->validate([
        'nama' => 'required',
        'email' => 'required|email|unique:employees',
        'phone' => 'required',
        'position' => 'required',
        'salary' => 'required|numeric'
    ]);

    $employee = Employee::create($data);

    return response()->json($employee, 201);
}

public function show($id) {
    return response()->json(Employee::findOrFail($id));
}

public function update(Request $request, $id) {
    $employee = Employee::findOrFail($id);

    $data = $request->validate([
        'nama' => 'sometimes|required',
        'email' => 'sometimes|required|email|unique:employees,email,' . $id,
        'phone' => 'sometimes|required',
        'position' => 'sometimes|required',
        'salary' => 'sometimes|required|numeric',
        'status' => 'sometimes|required'
    ]);

    $employee->update($data);

    return response()->json($employee);
}

public function destroy($id) {
    Employee::findOrFail($id)->delete();
    return response()->json(['message' => 'Employee deleted']);
}

}
