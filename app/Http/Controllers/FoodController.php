<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class FoodController extends Controller
{
    // Show Homepage With Number of Free Tables to Show Guests
    public function index() {
        return view('menu.index', [
            'totalTables' => User::count() - 1,
            'occupiedTables' => User::where('occupied', '=', true)->count()
        ]);
    }

    // Show Food Of Certain Type Page
    public function menu(String $type) {
        return view('menu.subMenu', [
            'foods' => Food::get()->where('type', $type)
        ]);
    }

    // Show Create Page
    public function create() {
        if(auth()->user()->name != 'admin')
            return back();
        return view('menu.create');
    }

    // Store Food Data
    public function store(Request $request) {
        if(auth()->user()->name != 'admin')
            return back();
        $formFields = $request->validate([
            'name' => ['required', Rule::unique('foods', 'name')],
            'type' => 'required',
            'price' => 'required',
            'image' => ['required', 'dimensions:ratio=200/125']
        ]);

        if($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store("images/{$formFields['type']}", 'public');
        }

        Food::create($formFields);

        return redirect('/manage/menu')->with('message', 'Item added successfully');
    }

    // Update Food Data
    public function update(Request $request, Food $food) {
        if(auth()->user()->name != 'admin')
            return back();
        $formFields = $request->validate([
            'name' => 'required',
            'price' => 'required'
        ]);

        if($request->type != null) {
            $formFields['type'] = $request->type;
        }
        else {
            $formFields['type'] = $food->type;
        }

        if($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store("images/{$formFields['type']}", 'public');
        }
        else {
            $formFields['image'] = $food->image;
        }

        $food->update($formFields);

        return redirect('/manage/menu')->with('message', 'Item updated successfully');
    }

    // Show Management Page
    public function manage() {
        if(auth()->user()->name != 'admin')
            return back();
        return view('menu.manage');
    }

    public function manageMenu() {
        if(auth()->user()->name != 'admin')
            return back();

        $meals = DB::table('foods')->get()->where('type', 'meals');
        $burgers = DB::table('foods')->get()->where('type', 'burgers');
        $sides = DB::table('foods')->get()->where('type', 'sides');
        $drinks = DB::table('foods')->get()->where('type', 'drinks');
        $desserts = DB::table('foods')->get()->where('type', 'desserts');

        return view('menu.edit-menu', [
            'meals' => $meals,
            'burgers' => $burgers,
            'sides' => $sides,
            'drinks' => $drinks,
            'desserts' => $desserts
        ]);
    }

    // Show Edit Page
    public function edit(Food $food) {
        if(auth()->user()->name != 'admin')
            return back();
        return view('menu.edit', ['food' => $food]);
    }

    // Delete Food Item
    public function destroy(Food $food) {
        $name = $food->name;

        $food->delete();

        return back()->with('message', $name . ' deleted successfully');
    }

    // Show Tables Management Page
    public function tables() {
        if(auth()->user()->name != 'admin')
            return back();
        $users = User::all();
        $orders = Order::all();
        return view('menu.tables', [
            'users' => $users,
            'orders' => $orders
        ]);
    }
}
