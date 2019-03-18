<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StripePlan;
use App\Shop;

class SubscriptionController extends Controller
{
    public function create(Request $request, StripePlan $plan)
    {
        $plan = StripePlan::findOrFail($request->get('plan'));
        
        Shop::find(1)
            ->newSubscription('main', $plan->stripe_plan)
            ->create($request->stripeToken);
        
        return response()->json(['success', 'Your plan subscribed successfully']);
    }
}
