<?php

namespace App\Http\Controllers;

use App\Models\SubMenu;
use Illuminate\Http\Response;

class PermissionController extends Controller
{
    public function getPermissions()
    {
        $permissions = SubMenu::query()
            ->with('permissions')
            ->select('sub_menu.id', 'sub_menu.sub_menu')
            ->get();

        return response()->json([
            'data' => $permissions,
            'status' => Response::HTTP_OK
        ]);
    }
}
