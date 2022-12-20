<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index() {
        $departments = Department::orderBy('dept_name')
            ->orderBy('dept_name')->get();

        return response()->json([
            'department' => $departments
        ]);
    }

    public function show(Department $departments) {
        $departments->load('departments');
        return response()->json($departments);
    }

    public function store(Request $request) {
        $request->validate([
            'dept_name' => 'string|required',
            'description' => 'string|required',

        ]);

        $department = department::create($request->all());

        return response()->json($department);
    }

    public function update(department $department, Request $request) {
        $department->update($request->all());

        return response()->json($department);
    }

    public function destroy(department $department) {
        $department->delete();
        return response()->json(['message'=>'department has been deleted.']);
    }
}
