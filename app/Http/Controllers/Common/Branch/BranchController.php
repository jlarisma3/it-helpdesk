<?php

namespace App\Http\Controllers\Common\Branch;

use App\Http\Controllers\Controller;
use App\Models\Common\Branch\Branch;
use App\Repositories\Common\Branch\BranchRepository;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    /**
     * @var BranchRepository
     */
    private BranchRepository $branchRepository;

    /**
     * @param BranchRepository $branchRepository
     */
    public function __construct(BranchRepository $branchRepository)
    {
        $this->branchRepository = $branchRepository->init();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $this->branchRepository->create($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Branch $branch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Branch $branch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Branch $branch)
    {
        $this->branchRepository->set($branch)->update($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Branch $branch)
    {
        $this->branchRepository->set($branch)->delete();
    }
}
