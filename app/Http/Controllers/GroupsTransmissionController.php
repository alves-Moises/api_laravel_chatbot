<?php

namespace App\Http\Controllers;

use App\Models\GroupsTransmission;
use Illuminate\Http\Request;

class GroupsTransmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo 'Deu certo. Index';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(GroupsTransmission $groupsTransmission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GroupsTransmission $groupsTransmission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GroupsTransmission $groupsTransmission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GroupsTransmission $groupsTransmission)
    {
        //
    }

    public function new_groups(Request $request)
    {
        echo "new groups";
    }
}
