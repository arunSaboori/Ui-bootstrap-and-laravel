<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\Redland;
use Illuminate\Http\Request;

class RedLandController extends Controller
{




    public function index()
    {
        $redland = Redland::query()->get()->all();
        $categories = categories::query()->get()->all();
        return view('redland.index', compact('redland'), compact('categories'));
    }


    public function create()
    {

        return view('redland.Create');
    }
    public function store(Request $request)
    {
        Redland::query()->insert([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,

        ], $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required',
        ]));
        return redirect()->route('redland.index');
    }



    public function edit(Redland $id)
    {

        return view('redland.Edit', compact('id'));
    }
    public function update(Request $request, $id)
    {
        $ids = Redland::find($id);
        $ids->title = $request->input('title');
        $ids->description = $request->input('description');
        $ids->category_id = $request->input('category_id');
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required',
        ]);
        $ids->update();
        return redirect()->route('redland.index');
    }



    public function delete($id)
    {
        $delete = Redland::find($id);
        $delete->delete();
        return redirect()->route('redland.index');
    }

    public function updated(Redland $id)
    {
        return view('redland.updated_at', compact('id'));
    }


    public function updatedfinal(Redland $id)
    {
        $id->update([
            'updated_at' => now()
        ]);
        return redirect()->back();
    }
}
