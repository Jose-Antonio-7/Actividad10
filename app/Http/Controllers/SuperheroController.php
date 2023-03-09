<?php

namespace App\Http\Controllers;

use App\Models\Superhero;
use Illuminate\Http\Request;

/**
 * Class SuperheroController
 * @package App\Http\Controllers
 */
class SuperheroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $superheroes = Superhero::paginate();

        return view('superhero.index', compact('superheroes'))
            ->with('i', (request()->input('page', 1) - 1) * $superheroes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $superhero = new Superhero();
        return view('superhero.create', compact('superhero'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Superhero::$rules);

        $superhero = Superhero::create($request->all());

        return redirect()->route('superheroes.index')
            ->with('success', 'Superhero created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $superhero = Superhero::find($id);

        return view('superhero.show', compact('superhero'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $superhero = Superhero::find($id);

        return view('superhero.edit', compact('superhero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Superhero $superhero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Superhero $superhero)
    {
        request()->validate(Superhero::$rules);

        $superhero->update($request->all());

        return redirect()->route('superheroes.index')
            ->with('success', 'Superhero updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $superhero = Superhero::find($id)->delete();

        return redirect()->route('superheroes.index')
            ->with('success', 'Superhero deleted successfully');
    }
}
