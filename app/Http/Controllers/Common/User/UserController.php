<?php

namespace App\Http\Controllers\Common\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\UserRequest;
use App\Http\Requests\Admin\User\UserUpdateRequest;
use App\Http\Resources\Common\User\UserCollection;
use App\Models\User\User;
use App\Repositories\User\UserRepository;
use App\Services\Common\StaticData;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    CONST RESOURCE_VIEW = 'Pages/Admin/User/';

    /**
     * @var UserRepository|mixed
     */
    private UserRepository $userRepository;

    /**
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository->init();

        $this->pageData = [
            'page' => ['name' => 'admin-user']
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Inertia::render(self::RESOURCE_VIEW . 'Index', $this->pageData);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request  $request)
    {
        $static = app()->call(StaticData::class . '@userStaticData');
        $this->pageData['common'] = $static;
        
        return Inertia::render(self::RESOURCE_VIEW . 'Form', $this->pageData);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $user = $this->userRepository->create($request);

        return redirect()->route('user.show', ['user' => $user->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserUpdateRequest $request, User $user)
    {
        $this->userRepository->set($user)->update($request);

        return redirect()->route('user.show', ['user' => $user->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $this->userRepository->set($user)->delete();

        return redirect()->route('user.index');
    }

    /**
     * @param Request $request
     * @return UserCollection
     */
    public function all(Request $request)
    {
        $users = $this->userRepository->all($request);

        return  new UserCollection($users);
    }
}
