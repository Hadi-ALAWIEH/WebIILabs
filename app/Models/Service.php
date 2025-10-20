<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Service extends Model
{
    /**
     * @return BelongsToMany<Customer,Service,Pivot>
     */
    public function getCustomers(): BelongsToMany
    {
        return $this->belongsToMany(Customer::class, "customer_services", "service_id", "customer_id");
    }
}
