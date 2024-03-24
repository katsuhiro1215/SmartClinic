<?php

namespace App\Http\Controllers;

use App\Http\Requests\Update\UpdateUserProfileRequest;
use App\Models\UserProfile;
use Inertia\Inertia;

class UserProfileController extends Controller
{
    public function edit(UserProfile $userProfile)
    {
        //
    }

    public function update(UpdateUserProfileRequest $request, UserProfile $userProfile)
    {
        //
    }

    public function destroy(UserProfile $userProfile)
    {
        //
    }
}
