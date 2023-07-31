<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Response;

class SidebarController extends Controller
{
    public function __invoke()
    {
        $menus = Menu::query()
            ->select('id', 'menu')
            ->with('subMenus')
            ->get();

        return response()->json([
            'data' => $menus,
            'status' => Response::HTTP_OK
        ]);
    }
}
