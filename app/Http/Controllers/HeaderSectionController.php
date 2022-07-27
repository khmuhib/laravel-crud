<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HeaderSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $header = Header::all();
        return view('pages.header.index', compact('header'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.header.create');
        //return 'dsadsa';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $header = new Header;
        $header->title = $request->title;
        $header->subtitle = $request->subtitle;
        if($request->hasfile('bg_image'))
        {
            $file = $request->file('bg_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/header/img', $filename);
            $header->bg_image = $filename;
        }
        if($request->hasfile('resume'))
        {
            $file = $request->file('resume');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/header/pdf', $filename);
            $header->resume = $filename;
        }
        $header->save();
        return redirect()->back()->with('status','Header Added Successfully');
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
        $header = Header::find($id);
        return view('pages.header.edit', compact('header'));
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
        //return 'dsadas';

        $header = Header::find($id);
        $header->title = $request->title;
        $header->subtitle = $request->subtitle;
        if($request->hasfile('bg_image'))
        {
            $destination = 'uploads/header/img/'.$header->bg_image;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('bg_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/header/img', $filename);
            $header->bg_image = $filename;
        }
        if($request->hasfile('resume'))
        {
            $destination = 'uploads/header/pdf/'.$header->resume;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('resume');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/header/pdf', $filename);
            $header->resume = $filename;
        }
        $header->save();
        return redirect()->back()->with('status','Header Added Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $header = Header::find($id);
        $destinationImg = 'uploads/header/img/'.$header->bg_image;
        $destinationfile = 'uploads/header/pdf/'.$header->resume;
        if(File::exists($destinationImg)){
            File::delete($destinationImg);
        }
        if(File::exists($destinationfile)){
            File::delete($destinationfile);
        }
        $header->delete();
        return redirect()->back()->with('status','Header Content Deleted Successfully');
    }
}
