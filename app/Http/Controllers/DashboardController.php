<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $events_count = Event::count();
        $tickets_sold = Ticket::count();
        $total_revenue = Ticket::sum('price');

        $user = Auth::user();

        // return view('dashboard.dashboard', compact('events_count', 'tickets_sold', 'total_revenue'));
        if ($user) {
            return view('dashboard.dashboard', compact('events_count', 'tickets_sold', 'total_revenue'));
        }else{
            return view('frontend.signin');
        }
    }
}