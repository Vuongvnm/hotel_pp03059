<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HotelController extends Controller
{
    public function index()
    {
        $hotels = Hotel::all();
        return view('hotels.index', compact('hotels'));
    }

    public function create()
    {
        return view('hotels.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'hotel_name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'rating' => 'required|numeric',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $hotel = new Hotel($request->except('image'));

        if ($request->hasFile('image')) {
            $hotel->image = $request->file('image')->store('images', 'public');
        }

        $hotel->save();

        return redirect()->route('hotels.index')->with('success', 'Khách sạn đã được thêm thành công.');
    }

    public function edit(Hotel $hotel)
    {
        return view('hotels.edit', compact('hotel'));
    }

    public function update(Request $request, Hotel $hotel)
    {
        $request->validate([
            'hotel_name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'rating' => 'required|numeric',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $hotel->fill($request->except('image'));

        if ($request->hasFile('image')) {
            // Xóa hình cũ nếu có
            if ($hotel->image) {
                Storage::disk('public')->delete($hotel->image);
            }
            $hotel->image = $request->file('image')->store('images', 'public');
        }

        $hotel->save();

        return redirect()->route('hotels.index')->with('success', 'Khách sạn đã được cập nhật thành công.');
    }

    public function destroy(Hotel $hotel)
    {
        $hotel->delete();
        return redirect()->route('hotels.index')->with('success', 'Khách sạn đã được xóa thành công.');
    }
}
