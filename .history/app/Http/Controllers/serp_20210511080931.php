<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serps as Serps;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Faker\Generator as Faker;
class serp extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // $newSerp = Serp::create([
        //     'title' => "Sample Title",
        //     'description' => "Sample Description",
        //     'userid' => 1,
        //     'url' => "someurl"
        // ]);

        return Auth0
        $data = new Serps;
        $faker = new Faker();
        $data->title = $faker->name;
        $data ->description = $faker->paragraph;
        $data -> userid = 1;
        $data -> url = "someurl";

        if($data->save()){
            return Inertia::render('Serps',[
                'serps' => Serps::latest()->get(),
            ]);
        }else{
            return 'error';
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

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
        //
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
