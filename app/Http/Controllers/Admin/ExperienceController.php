<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $experience = Experience::first();
        return view('admin.experience.index',compact('experience'));
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
        //the reason to set nullable in some fields its because is the user's call to fill or leave empty (it will be hidden from the frontend )
        $request->validate([
            'image'=>['image','max:5000'],
            'title' =>['required','max:200'],
            'description' =>['required','max:1000'],
            'phone' =>['nullable','max:100'],
            'email' =>['email','max:100','nullable'],
        ]);

        $experience = Experience::first();
        // $experience = Experience::findOrFail($id);
        $imagePath = handleUpload('image', $experience);

        Experience::updateOrCreate(
            ['id' => $id],
            [
                'title' => $request->title,
                'description' => $request->description,
                'image' => (!empty($imagePath) ? $imagePath : $experience->image),
                'phone' => $request->phone,
                'email' => $request->email,
            ]
        );

        toastr()->success('Updated Successfully!', 'success');
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
