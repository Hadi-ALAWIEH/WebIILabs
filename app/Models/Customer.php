<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Customer extends Model
{
    /**
     * @return HasOne<Credential,Customer>
     */
    public function getCredential(): HasOne
    {
        return $this->hasOne(Credential::class);
    }

    /**
     * @return HasMany<Credential,Customer>
     */
    public function getAccounts(): HasMany
    {
        return $this->hasMany(Credential::class);
    }

    /**
     * @return BelongsToMany<Service,Customer,Pivot>
     */
    public function getServices(): BelongsToMany
    {
        return $this->belongsToMany(Service::class, "customer_services", "customer_id", "service_id");
    }
}
