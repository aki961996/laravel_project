<?php

namespace App\Http\Controllers;

use App\Models\Borrower;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;


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

        // Retrieve the validated input data...
        // $request->validate([
        //     'first_name' => 'required',
        //     'last_name' => 'required',
        //     'date_of_birth' => 'required|date',
        //     'gender' => 'required',
        //     'msg' => 'required',
        //     'team' => 'required',
        // ]);

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'date_of_birth' => 'required|date',
            'gender' => 'required',
            'msg' => 'required',
            'team' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }


        Borrower::create([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'gender' => request('gender'),
            'date_of_birth' => request('date_of_birth'),
            'msg' => request('msg'),
            'teams' => request('team'),

        ]);
        return response()->json([
            'success' => 'borrower created successfully.',
            'status' => 'true',
        ]);
    }
}
