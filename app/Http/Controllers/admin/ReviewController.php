<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::with(['user', 'product'])->latest()->get();
        return view('admin.reviews.index', compact('reviews'));
    }

    public function updateStatus($id)
    {
        $review = Review::findOrFail($id);
      
        $review->status = !$review->status;
        $review->save();

        return redirect()->back()->with('success', 'Review status updated successfully.');
    }

    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect()->back()->with('success', 'Review deleted successfully.');
    }
}
