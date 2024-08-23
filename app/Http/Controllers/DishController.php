<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDishRequest;
use App\Http\Requests\UpdateDishRequest;
use App\Models\Dish;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $dishes = Dish::where('restaurant_id', Auth::id())->get();

        return view('admin.dishes.index', compact('dishes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.dishes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDishRequest $request)
    {
        $request->validated();

        $newDish = new Dish();

        if ($request->hasFile("img")) {
            $path = Storage::disk("public")->put("images", $request->img);

            $newDish->img = $path;
        }


        $request['restaurant_id'] = Auth::id();


        $newDish->fill($request->all());
        $newDish->save();

        return redirect()->route('admin.dishes.index', $newDish->id);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Dish $dish)
    {
        if ($dish->restaurant_id != Auth::id()) abort(403);

        return view('admin.dishes.show', compact('dish'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dish $dish)
    {
        if ($dish->restaurant_id != Auth::id()) abort(403);
        
        return view('admin.dishes.edit', compact('dish'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreDishRequest $request, Dish $dish)
    {
        $request->validated();

        
        if ($request->hasFile("img")) {
            $path = Storage::disk("public")->put("images", $request->img);

            $dish->img = $path;
        }
        $request['restaurant_id'] = Auth::id();

        $dish->update($request->all());

        $dish->save();

        return view('admin.dishes.show', compact('dish'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dish $dish)
    {
        $dish->delete();

        return redirect()->route('admin.dishes.index');
    }
}
