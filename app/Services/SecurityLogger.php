<?php

namespace App\Services;


use Illuminate\Support\Facades\Log;

class SecurityLogger
{
    /**
     * Log di eventi di sicurezza / audit
     *
     * @param string $event  Nome evento (es: ROLE_CHANGE_ADMIN)
     * @param mixed|null $user  Utente che esegue l’azione
     * @param array $data  Dati aggiuntivi contestuali
     */
    public static function log(string $event, $user = null, array $data = []): void
    {
        Log::channel('daily')->info('SECURITY_EVENT', [
            'event' => $event,
            'actor_user_id' => $user?->id,
            'actor_email' => $user?->email,
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent(),
            'route' => request()->path(),
            'method' => request()->method(),
            'timestamp' => now()->toDateTimeString(),
            'data' => $data,
        ]);
    }
}