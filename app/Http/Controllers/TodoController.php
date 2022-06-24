<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index(): View|Factory|Response|Application
    {
        $todos = Todo::all();

        return view('todo.index', ['todos'=>$todos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): Application|Factory|View
    {
        return view('todo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, Todo::$rules);
        $todo = new Todo;
        $form = $request->all();
        unset($form['_token']);
        $todo->fill($form)->save();

        return redirect()->route('todo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return View
     */
    public function show(int $id): View
    {
        $todo = Todo::find($id);

        return View('todo.show', ['todo' => $todo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Todo  $todo
     * @return Response
     */
    public function edit(Todo $todo): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Todo  $todo
     * @return Response
     */
    public function update(Request $request, Todo $todo): Response
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Todo  $todo
     * @return Response
     */
    public function destroy(Todo $todo): Response
    {
        //
    }
}
