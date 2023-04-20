<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Account;
use App\Models\User;
use Illuminate\Http\Request;

class AccountAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return Account::all();
    }

    /**
     * Display the specified resource.
     */
    public function getAccounts()
    {
        //
    }
}
