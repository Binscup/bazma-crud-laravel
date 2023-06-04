<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\CatagoriesBook;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {

        return view("pages.categories.index");
    }
    public function create()
    {
        return view("pages.categories.create");
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories_books,name'
        ], [
            'name.required' => 'name cannot be blank',
            'name.unique' => 'name already taken'
        ]);
        $data = [
            'name' => $request->name,
        ];
        CatagoriesBook::create($data);
        return redirect()->to('perpus/categories')->with('success', 'added data successfully');
    }
    public function show(Request $request, string $id)
    {
        $data = CatagoriesBook::where('name', $id)->first();
        return view('pages.categories.edit')->with('data', $data);
    }
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|unique:categories_books,name'
        ], [
            'name.required' => 'name cannot be blank',
            'name.unique' => 'name already taken'
        ]);
        $data = [
            'name' => $request->name,
        ];
        CatagoriesBook::where('id', $id)->update($data);
        return redirect()->to('perpus/categories')->with('success', 'Update data successfully');
    }
    public function destroy($id)
    {
        CatagoriesBook::where('id', $id)->delete();
        return redirect()->to('perpus/categories')->with('success', 'Update data successfully');
    }
}
