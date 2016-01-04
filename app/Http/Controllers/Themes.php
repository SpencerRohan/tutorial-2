<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Theme;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateThemeRequest;
use App\Repositories\FlashRepository;


class Themes extends Controller
{


    protected $message;

    public function __construct(FlashRepository $message)
    {
        $this->message = $message;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $themes = Theme::paginate(10);
        return view('themes.index', compact('themes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('themes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateThemeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateThemeRequest $request)
    {
        $theme = Theme::create($request->all());
        $this->message->flash("PUNY HUMAN - Your Theme has been created!");
        return redirect()->route('backend.themes.show', compact('theme'));
    }

    /**
     * Display the specified resource.
     *
     * @param  Theme $theme
     * @return \Illuminate\Http\Response
     */
    public function show(Theme $theme)
    {
        return view('themes.show', compact('theme'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Theme $theme
     * @return \Illuminate\Http\Response
     */
    public function edit(Theme $theme)
    {
        return view('themes.edit', compact('theme'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CreateThemeRequest  $request
     * @param  Theme $theme
     * @return \Illuminate\Http\Response
     */
    public function update(CreateThemeRequest $request, Theme $theme)
    {
        $theme->update($request->all());
        $this->message->flash("PUNY HUMAN - Your Theme has been updated!");
        return redirect()->route('backend.themes.show', compact('theme'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Theme $theme
     * @return \Illuminate\Http\Response
     */
    public function destroy(Theme $theme)
    {
        $theme->delete();
        $this->message->flash("PUNY HUMAN - You DESTROYED your theme!");
        return redirect()->route('backend.themes.index');
    }
}