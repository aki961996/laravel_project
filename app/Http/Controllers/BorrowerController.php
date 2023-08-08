<?php

namespace App\Http\Controllers;

use App\Models\Borrower;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;


class BorrowerController extends Controller
{
    public function borrowers()
    {
        $borrower = Borrower::all();
        $borrower = Borrower::paginate(7);
        return  view('borrower/borrowerList', ['borrower' => $borrower]);
    }

    public function borrowersAdd()
    {
        $borrower = Borrower::all();
        //return $borrower;

        return view('borrower/borrowersAdd', ['borrower' => $borrower]);
    }
    public function borrowersStore(Request $request): JsonResponse
    {
        Borrower::create([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'gender' => request('gender'),

            'date_of_birth' => request('date_of_birth'),
            'msg' => request('msg'),
            'teams' => request('team'),

        ]);
        return response()->json(['success' => 'borrower created successfully.']);
    }
}
