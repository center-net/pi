<?php

namespace App\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Logout extends Component
{
    public function logout()
    {
        Auth::logout();

        session()->invalidate();
        session()->regenerateToken();

        // إضافة رسالة فلاش
        session()->flash('message', 'تم تسجيل الخروج بنجاح');

        return redirect()->route('login');
    }
    public function render()
    {
        return view('auth.logout');
    }
}
