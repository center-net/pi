<?php

namespace App\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Login extends Component
{
    use AuthorizesRequests;

    public $username  = '';
    public $password = '';
    public $remember = false;
    public $showPiLogin = false;

    protected $rules = [
        'username' => 'required',
        'password' => 'required',
    ];

    public function login()
    {
        $this->validate();

        if (!Auth::attempt([
            'username' => $this->username,
            'password' => $this->password
        ], $this->remember)) {
            throw ValidationException::withMessages([
                'username' => __('auth.failed'),
            ]);
        }

        auth()->user()->update([
            'last_seen' => now()
        ]);

        return redirect()->intended('/admin');
    }

    public function render()
    {
        return view('auth.login');
    }
}
