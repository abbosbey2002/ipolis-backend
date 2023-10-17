<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreApiOsagoRequest;
use App\Http\Requests\UpdateApiOsagoRequest;
use App\Models\ApiOsago;
use App\Models\Order;
use Illuminate\Http\Request;

class ApiOsagoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreApiOsagoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ApiOsago $apiOsago)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ApiOsago $apiOsago)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateApiOsagoRequest $request, ApiOsago $apiOsago)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ApiOsago $apiOsago)
    {
        //
    }
    // create order


    //
    public function createOrder(Request $request)
    {
            $req = $request->json()->all();
            $policy_id = $req['policy_id'];
            $data = json_encode($req['data']);

       $orders = [
    'product_id' => 'osago',
    'amount' => 400,
    'state' => 2,
    'payment_type' => 'To\'lov turi',
    'policy_id' => $policy_id,
    'data' => $data,
];

$order = Order::create($orders);

        // Buyurtma muvaffaqiyatli yaratilgan
        // Qo'shimcha kodlar...

        return response()->json(['message' => 'Buyurtma muvaffaqiyatli yaratildi', 'data' => $data]);
    }
}
