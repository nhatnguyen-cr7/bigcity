<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Landlord\CreateLandlordRequest;
use App\Http\Requests\Landlord\UpdateLandlordRequest;
use App\Models\Landlord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandlordController extends Controller
{
    public function index()
    {
        return view('admin.pages.landlord.index');
    }

    public function getData()
    {
        $landlord = Landlord::all();
        return response()->json([
            'data'  => $landlord,
        ]);
    }

    public function updateStatus($id)
    {
        $landlord = Landlord::find($id);

        if ($landlord) {
            $landlord->is_open = !$landlord->is_open;
            $landlord->save();

            return response()->json([
                'status'  => true,
            ]);
        } else {
            return response()->json([
                'message'  => 'An error has occurred',
            ]);
        }
    }

    public function destroy($id)
    {
        $landlord = Landlord::find($id);
        if ($landlord) {
            $landlord->delete();

            return response()->json([
                'status'  => true,
            ]);
        } else {
            return response()->json([
                'status'  => false,
            ]);
        }
    }
}
