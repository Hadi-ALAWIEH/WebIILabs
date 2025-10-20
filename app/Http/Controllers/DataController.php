<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class DataController extends Controller
{

    public function index()
    {
        $customer = Customer::find(2); // find the customer, here his credential and his accounts are null pointers still ( LAZY LOADING )

        $cred = $customer->getCredential; // the credentials are lazily loaded, meaning it's only until this line that the pointer actually points to a credentials object
        /* return $cred->getCustomer; */

        $accs = $customer->getAccounts; // same for the accounts
        /* return $accs[0]->getCustomer; */

        $services = $customer->getServices; // same for the services
        /* return $services[0]->getCustomers; // get all the customers that are registred for the `Internet Banking` service */
        /* return $services[1]->getCustomers; // get all the customers that are registred for the `Mobile Banking` service */

        return $customer;
    }
}
