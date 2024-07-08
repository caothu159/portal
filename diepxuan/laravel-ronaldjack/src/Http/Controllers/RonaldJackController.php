<?php

declare(strict_types=1);

/*
 * @copyright  © 2019 Dxvn, Inc.
 *
 * @author     Tran Ngoc Duc <ductn@diepxuan.com>
 * @author     Tran Ngoc Duc <caothu91@gmail.com>
 *
 * @lastupdate 2024-07-08 21:11:49
 */

namespace Diepxuan\RonaldJack\Http\Controllers;

use App\Http\Controllers\Controller;
use Diepxuan\RonaldJack\Models\Machine;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RonaldJackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $machine = new Machine();

        return view('catalog::system.index', [
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('catalog::system.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param mixed $request
     */
    public function store(Request $request): RedirectResponse
    {
        return Redirect::route('system.index');
    }

    /**
     * Show the specified resource.
     *
     * @param mixed $id
     */
    public function show($id)
    {
        return view('catalog::system.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param mixed $id
     */
    public function edit($id)
    {
        return view('catalog::system.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param mixed $request
     * @param mixed $id
     */
    public function update(Request $request, $id): RedirectResponse
    {
        return Redirect::route('system.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param mixed $id
     */
    public function destroy($id): void {}
}
