<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::all();
        return view('backend.pages.banner.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
           'title' => 'required',
           'description' => 'nullable',
           'image' => 'image',
           'status' => 'nullable|in:active,inactive',
           'condition' => 'nullable|in:banner,promo',
        ]);

        $image = $request->file('image');
        $imagename = hexdec(uniqid());
        $imageext = $image->getClientOriginalExtension();
        $imagenamefullname = $imagename . '.' . $imageext;
        $location = public_path('images/banner/');
        $image->move($location, $imagenamefullname);

        $slug = $request->slug = Str::slug($request->title);

        Banner::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagenamefullname,
            'slug' => $slug,
            'status' => $request->status,
            'condition' => $request->condition,
        ]);

        session()->flash('msg', 'Banner created successfully!');
        return redirect()->route('banner.index');

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
        $banner = Banner::findOrFail($id);
        return view('backend.pages.banner.edit', compact('banner'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
