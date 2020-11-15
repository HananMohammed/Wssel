<?php

namespace App\Http\Controllers;

use App\Http\Traits\SendEmail;
use App\Models\Customer;

class CustomerController extends Controller
{
    use SendEmail;
    /**
     * Display a listing of the resource.
     *
     * @return view
     */
    public function index()
    {
         $customers = Customer::all();

         return view("customer.index",compact('customers'));
    }

    /**
     * @param $id
     * @return back
     */
    public function sendCustomerEmail($id)
   {
       $data = Customer::find($id) ;

       $this->sendEmail($data);

       return back()->with('success' , 'Message Sent Successfully') ;

   }

}
