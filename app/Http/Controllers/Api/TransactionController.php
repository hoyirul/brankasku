<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Traits\ApiResponse;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    use ApiResponse;

    public function index(){
        $response = Transaction::with('user')->get();

        return $this->apiSuccess($response);
    }

    public function getByMonth(){
        $response = Transaction::select('category', DB::raw('SUM(amount) as amount'))
                        ->where('user_id', Auth::user()->id)
                        ->groupBy('category', DB::raw('MONTH(created_at)'), DB::raw('YEAR(created_at)'))
                        ->get();

        return $this->apiSuccess($response);
    }
}
