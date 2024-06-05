<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\User;

use Domain\Auth\Models\User;
use App\Http\Controllers\Controller;
use Domain\Admin\DTOs\UpdateUserDTO;
use Illuminate\Http\RedirectResponse;
use Domain\Admin\Contracts\UpdateUserContract;
use App\Http\Requests\Admin\User\UpdateRequest;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, User $user, UpdateUserContract $action): RedirectResponse
    {
        $params = $request->validated();
        $params['available_messages'] = (int) $params['available_messages'];
        $formRequest = UpdateUserDTO::formRequest($params);
        $action($user, $formRequest);

        return to_route('admin.user.index');
    }
}
