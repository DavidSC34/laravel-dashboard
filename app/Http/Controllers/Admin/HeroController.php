<?php

namespace App\Http\Controllers\Admin;

use App\Models\Hero;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $heroe = Hero::first();
        
        
        return view('admin.hero.index', compact('heroe'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //dd($request->all());

        $request->validate([
            'title'=>['required','max:200'],
            'sub_title'=>['required','max:500'],
            'image'=>['max:3000','image']
        ]);

    
        $heroe = Hero::first();
        if($request->hasFile('image')){
            //Logic to delete the previous image, to  prevent storage
            if($heroe && File::exists(public_path($heroe->image))){
                File::delete(public_path($heroe->image));
              }
            $image = $request->file('image');
            $imageName = rand().$image->getClientOriginalName();
            $image->move(public_path('/uploads'), $imageName);

            $imagePath = "/uploads/". $imageName;

            // dd($imagePath);
        }

        Hero::updateOrCreate(
            ['id'=>$id],
            [
                'title'=>$request->title,
                'sub_title'=>$request->sub_title,
                'btn_text'=>$request->btn_text,
                'btn_url'=>$request->btn_url,
                'image'=>isset($imagePath) ? $imagePath : $heroe->image,
            ]
        );
       
        toastr()->success('Updated Successfully!', 'Congrats');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
