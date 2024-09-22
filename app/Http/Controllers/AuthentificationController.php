<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Throwable;


class AuthentificationController extends Controller
{
     //show the sign-in form
     public function showSigninForm()
     {
         return view('frontend.signin');
     }

    public function signin(Request $request )
    {
        //validate the request data
        $validated = $request->validate([
            "email"=> "required|email|max:255",
            "password"=> "required|string|min:8"
        ]);

        // Attempt to log the  user in
        if(Auth::attempt($validated)){
            //Fetch dashboard data if login is successful
            $events_count = Event::count();
            $tickets_sold = Ticket::count();
            $total_revenue = Ticket::sum('price');

        //Redirect to the dashboard with success message
            return view('dashboard.dashboard', compact('events_count', 'tickets_sold', 'total_revenue'))->with("success","You are login successfully");
        }else{
            //Redirect back to sign-in form with an error message
            return redirect()->route('frontend.signin')->with('error', 'Invalid credentials, please try again.');

            //redirect('frontend.signin');
        }
    }
     //Show the sign-up form
    public function showSignupForm()
     {
         return view('frontend.signup');
     }
     //Handle the sign-up process
    public function signup(Request $request){
        //Validate the request data
        $validated = $request->validate([
            "name"=> "required|string|max:255",
            "email"=> "required|unique:users,email|max:255",
            "phone_number"=> "required|string|max:20",
            "password"=> "required|string|min:8|confirmed",
            "password_confirmation' => 'required|string|same:password",
        ]);

        try {
            // Create a new user in the database
            $user = User::create([
                'name'=> $validated['name'],
                'email'=> $validated['email'],
                'phone_number'=> $validated['phone_number'],
                'password'=> Hash::make($validated['password']),
            ]);

            //Log the user in after successful registration
            Auth::signin($user);

            //Fetch dashboard data
            $events_count = Event::count();
            $tickets_sold = Ticket::count();
            $total_revenue = Ticket::sum('price');

            //Redirect to the dashboard with success message
            return view('dashboard.dashboard', compact('events_count', 'tickets_sold', 'total_revenue'))->with("success","You are registered and logined successfully");
        } catch (Throwable $th) {
            //Handle any errors that occur during registration
            //throw $th;
            return view('error.500')->with("error", 'An error occured during registration: ' . $th->getMessage());
        }
    }

           
}
