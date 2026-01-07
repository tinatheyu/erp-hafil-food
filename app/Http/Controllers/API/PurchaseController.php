<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Purchase;
class PurchaseController extends Controller
{
    //
    public function store(Request $request) {
    $data = $request->validate([
        'supplier_id' => 'required|exists:suppliers,id',
        'employee_id' => 'required|exists:employees,id',
        'purchase_date' => 'required|date',
        'items' => 'required|array',
        'items.*.product_id' => 'required|exists:products,id',
        'items.*.qty' => 'required|integer|min:1',
        'items.*.price' => 'required|numeric|min:0'
    ]);

    return DB::transaction(function () use ($data) {
        $purchase = Purchase::create([
            'supplier_id' => $data['supplier_id'],
            'employee_id' => $data['employee_id'],
            'purchase_date' => $data['purchase_date']
        ]);

        $total = 0;

        foreach ($data['items'] as $item) {
            $subtotal = $item['qty'] * $item['price'];
            $total += $subtotal;

            PurchaseItem::create([
                'purchase_id' => $purchase->id,
                'product_id' => $item['product_id'],
                'qty' => $item['qty'],
                'price' => $item['price'],
                'subtotal' => $subtotal
            ]);
        }

        $purchase->update(['total' => $total]);

        return $purchase->load('items');
    });
}

public function show($id) {
    return Purchase::with('items')->findOrFail($id);
}

}
