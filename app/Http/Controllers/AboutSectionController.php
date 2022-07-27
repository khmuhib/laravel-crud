<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AboutSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::all();
        return view('pages.about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $about = new About;
        $about->date_range = $request->date_range;
        $about->title = $request->title;
        $about->description = $request->description;
        if($request->hasfile('about_image'))
        {
            $file = $request->file('about_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/about/img', $filename);
            $about->about_image = $filename;
        }
        $about->save();
        return redirect()->back()->with('status', 'About section Data created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about = About::find($id);
        return view('pages.about.edit',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $about = About::find($id);
        $about->date_range = $request->date_range;
        $about->title = $request->title;
        $about->description = $request->description;
        if($request->hasfile('about_image'))
        {
            $destination = 'uploads/about/img/'.$about->about_image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('about_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/about/img', $filename);
            $about->about_image = $filename;
        }
        $about->update();
        return redirect()->back()->with('status', 'About section Data Updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = About::find($id);
        $destination = 'uploads/about/img/'.$about->about_image;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $about->delete();
        return redirect()->back()->with('status','About Data Deleted Successfully');
    }
}
