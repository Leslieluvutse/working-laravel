<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile; // Ensure this import

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $profile = Profile::where('user_id', $user->id)->first();

        if(!$profile)
        {
            return redirect()->route('profile.create')->with('startus','Please create a profile first');
        }
        return view('home', compact('profile'));
    }

    public function create()
    {
        return view('profile.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:profiles',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $profile = new Profile();
        $profile->user_id = Auth::id();
        $profile->name = $request->input('name');
        $profile->email = $request->input('email');
        $profile->phone = $request->input('phone');
        $profile->address = $request->input('address');

        if ($request->hasFile('profile_image')) {
            $path = $request->file('profile_image')->store('profile_images', 'public');
            $profile->profile_image = $path;
        }

        $profile->save();

        return redirect()->route('home')->with('status', 'Profile created successfully');
    }

    public function view()
    {
        $user = Auth::user();
        $profile = Profile::where('user_id', $user->id)->first();
        return view('profile.view', compact('profile'));
    }

    public function edit()
    {
        $user = Auth::user();
        $profile = Profile::where('user_id', $user->id)->first();
        return view('profile.edit', compact('profile'));
    }

    public function update(Request $request)
    {
        $profile = Profile::where('user_id', Auth::id())->first();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:profiles,email,' . $profile->id,
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $profile->name = $request->input('name');
        $profile->email = $request->input('email');
        $profile->phone = $request->input('phone');
        $profile->address = $request->input('address');

        if ($request->hasFile('profile_image')) {
            $path = $request->file('profile_image')->store('profile_images', 'public');
            $profile->profile_image = $path;
        }

        $profile->save();

        return redirect()->route('home')->with('status', 'Profile updated successfully');
    }

    public function destroy($id)
    {
        $profile = Profile::where('user_id', Auth::id())->first();
        $profile->delete();

        Auth::logout();
        return redirect()->route('login')->with('status', 'Profile deleted successfully');
    }
}

