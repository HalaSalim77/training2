<?php

namespace App\Http\Controllers;

use App\Http\Resources\PetitionCollection;
use App\Http\Resources\PetitionResource;
use App\Models\Petition;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Response;
use Illuminate\Http\Response;

class PetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        //Display all petitions 
        //return json

        //    $petition = Petition::all();

        //   return PetitionResource::collection(Petition::all());

        //   return new PetitionCollection(Petition::all());

        //return json response with petition collection as the first parameter and the second parameter status code =200 http-ok
        return response()->json(new PetitionCollection(Petition::all()), Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\PetitionResource
     */
    public function store(Request $request)
    {
        //create new petition
        $petition = Petition::create($request->only([
            'title', 'description', 'category', 'author', 'signees'
        ]));

        return new PetitionResource($petition);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Petition  $petition
     * @return \Illuminate\Http\PetitionResource
     */
    public function show(Petition $petition)
    {
        //

        return new PetitionResource($petition);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Petition  $petition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Petition $petition)
    {
        //
        $petition->update($request->only([
            'title', 'description', 'category', 'auhtor', 'signees'
        ]));

        return new PetitionResource($petition);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Petition  $petition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Petition $petition)
    {
        //
        $petition->delete();
        //return json response
        //the first parameter = null , status code = 204 no content 
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
