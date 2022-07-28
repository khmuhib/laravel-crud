<?php

namespace App\Http\Controllers;

use App\Models\Protfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProtfolioSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $protfolios = Protfolio::all();
        return view('pages.protfolio.index', compact('protfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.protfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $protfolio = new Protfolio;
        $protfolio->client = $request->client;
        $protfolio->category = $request->category;
        $protfolio->title = $request->title;
        $protfolio->subtitle = $request->subtitle;
        $protfolio->description = $request->description;
        if($request->hasfile('profolio_image'))
        {
            $file = $request->file('profolio_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/protfolio/img', $filename);
            $protfolio->profolio_image = $filename;
        }
        $protfolio->save();
        return redirect()->back()->with('status', 'Protfolio Added successfully');


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
        $protfolio = Protfolio::find($id);
        return view('pages.protfolio.edit', compact('protfolio'));
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
        $protfolio = Protfolio::find($id);
        $protfolio->client = $request->client;
        $protfolio->category = $request->category;
        $protfolio->title = $request->title;
        $protfolio->subtitle = $request->subtitle;
        $protfolio->description = $request->description;
        if($request->hasfile('profolio_image'))
        {
            $destination = 'uploads/protfolio/img/'.$protfolio->profolio_image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('profolio_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/protfolio/img', $filename);
            $protfolio->profolio_image = $filename;
        }
        $protfolio->update();
        return redirect()->back()->with('status', 'Protfolio Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $protfolio = Protfolio::find($id);
        $destination = 'uploads/protfolio/img/'.$protfolio->profolio_image;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $protfolio->delete();
        return redirect()->back()->with('status', 'Protfolio Deleted successfully');
    }
}
