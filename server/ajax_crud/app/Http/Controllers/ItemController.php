<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class ItemController extends Controller
{

    public function index()
    {
        $items = Item::all();
        Log::info($items);
        return response()->json($items);
    }

    public function store(Request $request)
    {
        $item = Item::create($request->all());
        return response()->json($item);
    }

    public function show($id)
    {
        $item = Item::findOrFail($id);
        return response()->json($item);
    }

    public function update(Request $request, $id)
    {
        $item = Item::findOrFail($id);
        $item->update($request->all());
        return response()->json($item);
    }

    public function destroy($id)
    {
        Item::destroy($id);
        return response()->json(['message' => 'Item deleted successfully']);
    }
}
