<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    //
    public function index()
    {
        $items = Item::all();
        return view('items.index', ['items' => $items]);
    }

    public function create()
    {
        return view('items.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'quantity' => 'required|integer',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);

        Item::create($data);
        return redirect(route('item.index'))->with('success', 'Item created Successfully');
    }
    

}
