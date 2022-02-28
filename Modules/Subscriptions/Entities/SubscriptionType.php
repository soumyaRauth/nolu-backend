<?php

namespace Modules\Subscriptions\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubscriptionType extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];


    /**
     * Subscription type has many subscriptions
     */
    public function hasSubscriptions()
    {
        return $this->hasMany('Modules\Subscriptions\Entities\Subscriptions', 'subscription_type_id');
    }
}
