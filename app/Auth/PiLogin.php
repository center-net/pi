<?php

namespace App\Auth;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class PiLogin extends Component
{
    public $error = null;

    public function handlePiAuth($accessToken, $user)
    {
        try {
            // التحقق من Pi Network API
            $response = Http::withHeaders([
                'Authorization' => 'Bearer '.$accessToken
            ])->get('https://api.minepi.com/v2/me');

            if (!$response->successful()) {
                $this->error = 'Pi Network authentication failed.';
                return;
            }

            $piApiUser = $response->json();

            if ($piApiUser['uid'] !== $user['uid']) {
                $this->error = 'User verification failed.';
                return;
            }

            // البحث عن مستخدم موجود أو إنشاء حساب جديد
            $user = User::firstOrCreate(
                ['pi_network_id' => $piApiUser['uid']],
                [
                    'name' => $piApiUser['username'] ?? 'Pi User',
                    'username' => 'pi_'.Str::random(8),
                    'password' => bcrypt(Str::random(24)),
                ]
            );

            // تسجيل دخول المستخدم
            Auth::login($user, true);
            return redirect()->intended('/dashboard');
        } catch (\Exception $e) {
            $this->error = 'Authentication error: ' . $e->getMessage();
        }
    }

    public function render()
    {
        return view('auth.pi-login');
    }
}


