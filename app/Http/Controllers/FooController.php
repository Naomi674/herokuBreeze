<?php

namespace App\Http\Controllers;

use App\Models\Foo;
use Illuminate\Http\Request;

class FooController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foos = Foo::orderBy('updated_at','desc')->get();
        return view('foo.index', compact('foos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('foo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $foo = Foo::create($this->validateFoo($request));
        return redirect(route('foos.index',$foo));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Foo  $foo
     * @return \Illuminate\Http\Response
     */
    public function show(Foo $foo)
    {
        return view('foo.show', compact('foo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Foo  $foo
     * @return \Illuminate\Http\Response
     */
    public function edit(Foo $foo)
    {
        return view('foo.edit',compact('foo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Foo  $foo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Foo $foo)
    {
        $foo->update($this->validateFoo($request));
        return redirect(route('foos.index',$foo));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Foo  $foo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Foo $foo)
    {
        $foo->delete();
        return redirect(route('foos.index'));
    }
    private function validateFoo(Request $request)
    {
        return $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
    }
}
