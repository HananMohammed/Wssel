<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Http\Traits\SendEmail;
use App\Models\Customer;
use App\Models\Order;


class OrderController extends Controller
{
    use SendEmail ;
    /**
     * Display a listing of the resource.
     *
     * @return view
     */
    public function index()
    {
        $orders = Order::all();

        return view("order.index",compact('orders'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create()
    {
        $customers = Customer::all();

        $order = new Order();

        return view("order.create",compact('customers','order'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  OrderRequest  $request
     * @param Order $model
     * @return redirect
     */
    public function store(OrderRequest $request , Order $model)
    {
        $model->create($request->all());

        return  redirect(route('orders.index'))->with('success' , 'Order Created Successfully') ;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Order  $order
     * @return view
     */
    public function edit(Order $order)
    {
        $customers =Customer::all();

        return view("order.edit",compact('customers','order'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  OrderRequest $request
     * @param  Order  $order
     * @return Response
     */
    public function update(OrderRequest $request, Order $order)
    {
        $order->update($request->all());

        return  redirect(route('orders.index'))->with('success' , 'Order Updated Successfully') ;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Order  $order
     * @return back
     */
    public function destroy(Order $order)
    {
        $order->delete();

        return  redirect(route('orders.index'))->with('success' , 'Order Deleted Successfully') ;
    }
    /**
     * @param $id
     */
    public function sendCustomerEmail($id)
    {
        $data = Order::find($id)->customer ;

        $this->sendEmail($data);

        return back()->with('success' , 'Message Sent Successfully') ;

    }
}
