<?php

namespace App\Http\Controllers\Admin;

use App\ProposalSession;
use App\ProposalType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProposalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proposals = ProposalSession::orderBy('id','desc')->get();
        return view('admin.proposal.index',compact('proposals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = ProposalType::all();
        return view('admin.proposal.create',compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'author' => 'required',
            'type_id' => 'required',
            'file_name' => 'required|mimes:pdf'
        ]);

            $file=$request->file('file_name');
            $file_ex=$request->file('file_name')->getClientOriginalExtension();
            $fileName=time().".".$file_ex;

            Storage::disk('proposal')->put($fileName,file($file));
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
}
