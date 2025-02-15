<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diary;
use Illuminate\Support\Facades\Storage;

class DiaryController extends Controller
{
    public function index()
    {
        return response()->json(auth()->user()->diaries, 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'title' => 'required|string|max:255',
            'detail' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,png,jpeg'
        ]);

        $imagePath = $request->file('image') ? $request->file('image')->store('diary_images', 'public') : null;

        $diary = auth()->user()->diaries()->create([
            'date' => $request->date,
            'title' => $request->title,
            'detail' => $request->detail,
            'image' => $imagePath
        ]);

        return response()->json($diary, 201);
    }

    public function show($id)
    {
        $diary = auth()->user()->diaries()->findOrFail($id);
        return response()->json($diary, 200);
    }

    public function update(Request $request, $id)
{
    $diary = auth()->user()->diaries()->findOrFail($id);

    $request->validate([
        'date' => 'date',
        'title' => 'string|max:255',
        'detail' => 'string',
    ]);

    $diary->update(array_filter([
        'date' => $request->date ?? $diary->date,
        'title' => $request->title ?? $diary->title,
        'detail' => $request->detail ?? $diary->detail,
    ]));

    return response()->json($diary, 200);
}

    

    public function destroy($id)
{
    $diary = auth()->user()->diaries()->findOrFail($id);

    // Pastikan hanya menghapus jika ada gambar
    if ($diary->image) {
        Storage::disk('public')->delete($diary->image);
    }

    $diary->delete();

    return response()->json(['message' => 'Deleted'], 200);
}

}

