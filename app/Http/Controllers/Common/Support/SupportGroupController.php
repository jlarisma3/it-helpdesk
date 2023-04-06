<?php

namespace App\Http\Controllers\Common\Support;

use App\Http\Controllers\Controller;
use App\Models\Common\Support\SupportGroup;
use App\Repositories\Common\Support\SupportGroupRepository;
use Illuminate\Http\Request;

class SupportGroupController extends Controller
{
    /**
     * @var SupportGroupRepository
     */
    private SupportGroupRepository $supportGroupRepository;

    public function __construct(SupportGroupRepository $supportGroupRepository)
    {
        $this->supportGroupRepository = $supportGroupRepository->init();
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
        $this->supportGroupRepository->create($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(SupportGroup $supportGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SupportGroup $supportGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SupportGroup $supportGroup)
    {
        $this->supportGroupRepository->set($supportGroup)->update($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SupportGroup $supportGroup)
    {
        $this->supportGroupRepository->set($supportGroup)->delete();
    }
}
