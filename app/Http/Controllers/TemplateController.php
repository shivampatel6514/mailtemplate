<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Template::all();
        return view('template.index',compact('data'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('template.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $content = new Template;
        $content->title = $request->title;
        $content->content = $request->content;
        $content->save();

        return redirect('templates');
    }

    /**
     * Display the specified resource.
     */
    public function show(Template $template)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Template $template)
    {
        return view('template.edit',compact('template'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Template $template)
    {
        $template->title = $request->title;
        $template->content = $request->content;
        $template->save();

        return redirect('templates');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Template $template)
    {
        $template->delete();
        return redirect()->back();
    }
}
