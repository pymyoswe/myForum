<?php

namespace App\Http\Controllers;

use App\ProposalSession;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProposalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('proposal-session');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\ProposalSession  $proposalSession
     * @return \Illuminate\Http\Response
     */
    public function show(ProposalSession $proposalSession)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProposalSession  $proposalSession
     * @return \Illuminate\Http\Response
     */
    public function edit(ProposalSession $proposalSession)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProposalSession  $proposalSession
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProposalSession $proposalSession)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProposalSession  $proposalSession
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProposalSession $proposalSession)
    {
        //
    }

    public function download($filename)
    {
        // Check if file exists in app/storage/file folder
        $file_path = storage_path('/app/papers/'.$filename);

        if (file_exists($file_path))
        {
            // Send Download
            return response()->download($file_path);
        }
        else
        {
            // Error
            exit('Requested file does not exist on our server!');
        }

    }
}
