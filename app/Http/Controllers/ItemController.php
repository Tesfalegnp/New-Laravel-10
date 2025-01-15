<?php
namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('items.welcome', compact('items'));
    }
    public function register(){
        $items = Item::all();
        return view('items.register', compact('items'));
    }


    public function store(Request $request)
    { 
        $request->validate([ 

            'bed_type' => 'required',
            'description' => 'nullable',
            'room' => 'required',
            'image' => 'nullable',
            'price'=>'required'
        ]);

        Item::create($request->all());

        return redirect()->back()->with('success', 'Item created successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'bed_type' => 'required',
            'description' => 'nullable',
            'room' => 'required',
            'image' => 'nullable',
            'price'=>'required'
        ]);

        $item = Item::findOrFail($id);
        $item->update($request->all());
        return redirect()->back()->with('success', 'Item updated successfully.');
    }

    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();
        return redirect()->back()->with('success', 'Item deleted successfully.');
    }
    public function bed_ord(){
        $items=Item::all();
        return view('items.available', compact('items'));
    }
    public function Login(){
        return view('items.login');
    }

    // To chek the Login Credentaials
    public function login_check(Request $request)
    {
        $credentials = $request->only('username', 'password');
        $items=Item::all();
        return view('admin.index', compact('items'));
        // if (Auth::guard('admin')->attempt($credentials)) {
        //     return redirect()->route('admin.dashboard'); // Replace with your welcome page route
        // }
        // return back()->with('error', 'Invalid credentials.');
    }
}