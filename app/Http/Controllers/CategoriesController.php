<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){
     $all =  categories::get()->all();

        return view('categories.index',compact('all'));
    }


    public function create(){
    return view('categories.Create');
        }


    public function store(Request $request){
       categories::query()->insert([
             'name'=>$request->name,
             ],$request->validate(['name'=>'required']));
             return redirect()->route('category.index');
    }


    public function edit(categories $id){

        return view('categories.Edit', compact('id'));

    }

   public function update(Request $request, $id){
   $all = categories::find($id);
   $all->name = $request->input('name');
   $request->validate(['name'=>'required']);
   $all->update();
   return redirect()->route('category.index');
   }




   public function delete($id){
   $all = categories::find($id);
   $all->delete();
   return redirect()->route('category.index');

   }
   public function updated(categories $id)
   {
       return view('categories.updated_at', compact('id'));
   }


   public function updatedfinal(categories $id)
   {
       $id->update([
           'updated_at' => now()
       ]);
       return redirect()->back();
   }

}
