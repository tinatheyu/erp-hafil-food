<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Purchase;
use Illuminate\Support\Facades\DB;
use App\Models\PurchaseItem;
class PurchaseController extends Controller
{
    //
   public function store(Request $request)
    {
        $data = $request->validate([
            'employee_id'   => 'required|exists:employees,id',
            'product_id'    => 'required|exists:products,id',
            'purchase_date' => 'required|date',
            'qty'           => 'required|integer|min:1',
            'price'         => 'required|numeric|min:0'
        ]);

        $total = $data['qty'] * $data['price'];

        $purchase = Purchase::create([
            'employee_id'   => $data['employee_id'],
            'product_id'    => $data['product_id'],
            'purchase_date' => $data['purchase_date'],
            'qty'           => $data['qty'],
            'price'         => $data['price'],
            'total'         => $total
        ]);

        return response()->json($purchase, 201);
    }

    public function show($id)
    {
        return Purchase::findOrFail($id);
    }
}
