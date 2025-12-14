<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function create (Request $request)
    {
        $customer = Customer::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'nomor' => $request->nomor,
            'alamat' => $request->alamat,
        ]);

        return response()->json([
            'message' => 'Customer created successfully',
            'data' => $customer
        ], 201);
    }

    public function update(Request $request, $id) {
        $customer = Customer::find($id);
        $customer->nama = $request->nama;
        $customer->email = $request->email;
        $customer->nomor = $request->nomor;
        $customer->alamat = $request->alamat;
        $customer->save();
        return response()->json([
            'message' => 'Customer updated successfully',
            'data' => $customer
        ], 200);
    }

    public function delete($id) {
        $customer = Customer::find($id);
        $customer->delete();
        
        return response()->json([
            'message' => 'Customer deleted successfully'
        ], 200);
    }

    public function getAll() {
        $customers = Customer::all();
        return response()->json([
            'data' => $customers
        ], 200);
    }
}
