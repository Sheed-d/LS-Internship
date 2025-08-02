<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function create(): View{
        return view('posts.create');
    }

    public function show($id): View {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    public function store(Request $request): RedirectResponse {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'species' => 'required|string|max:255',
        ]);

        Post::create($validated);

        return redirect()->route('dashboard')->with('success', 'Dino post created!');
    }
}