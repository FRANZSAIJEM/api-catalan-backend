<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index() {
        $staffs = Staff::orderBy('name')
            ->orderBy('name')->get();

        return response()->json([
            'staff' => $staffs
        ]);
    }

    public function show(Staff $staffs) {
        $staffs->load('staffs');
        return response()->json($staffs);
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'string|required',
            'address' => 'string|required',
            'salary' => 'numeric|required',
            'email' => 'string|required',
            'dept_id' => 'numeric|required',

        ]);

        $staff = Staff::create($request->all());

        return response()->json($staff);
    }

    public function update(Staff $staff, Request $request) {
        $staff->update($request->all());

        return response()->json($staff);
    }

    public function destroy(Staff $staff) {
        $staff->delete();
        return response()->json(['message'=>'staff has been deleted.']);
    }
}
