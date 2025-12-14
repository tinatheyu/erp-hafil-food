<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Manufactur;
use Illuminate\Http\Request;

class ManufacturController extends Controller
{
    public function create(Request $request)
    {
        $manufactur = Manufactur::create([
            'kuantitas' => $request->kuantitas,
            'cost' => $request->cost,
            'product' => $request->product,
        ]);

        return response()->json([
            'message' => 'Manufactur created successfully',
            'data' => $manufactur
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $manufactur = Manufactur::find($id);
        if (!$manufactur) {
            return response()->json(['message' => 'Manufactur not found'], 404);
        }

        $manufactur->update([
            'kuantitas' => $request->kuantitas,
            'cost' => $request->cost,
            'product' => $request->product,
        ]);

        return response()->json([
            'message' => 'Manufactur updated successfully',
            'data' => $manufactur
        ], 200);
    }

    public function delete($id)
    {
        $manufactur = Manufactur::find($id);
        if (!$manufactur) {
            return response()->json(['message' => 'Manufactur not found'], 404);
        }

        $manufactur->delete();

        return response()->json([
            'message' => 'Manufactur deleted successfully'
        ], 200);
    }

    public function getAll()
    {
        $manufacturs = Manufactur::all();
        return response()->json([
            'data' => $manufacturs
        ], 200);
    }
}
