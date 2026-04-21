<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLugarRequest;
use App\Http\Requests\UpdateLugarRequest;
use App\Http\Resources\LugarResource;
use App\Models\Lugar;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class LugaresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): AnonymousResourceCollection
    {
        return LugarResource::collection(Lugar::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLugarRequest $request): LugarResource
    {
        $lugar = Lugar::create($request->validated());

        return new LugarResource($lugar);
    }

    /**
     * Display the specified resource.
     */
    public function show(Lugar $lugar): LugarResource
    {
        return new LugarResource($lugar);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLugarRequest $request, Lugar $lugar): LugarResource
    {
        $lugar->update($request->validated());

        return new LugarResource($lugar);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lugar $lugar): Response
    {
        $lugar->delete();

        return response()->noContent();
    }
}
