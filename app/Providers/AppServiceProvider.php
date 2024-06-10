<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        VerifyEmail::toMailUsing(function (object $notifiable, string $url) {
            return (new MailMessage)
                ->greeting('Dobrý den!')
                ->subject('Ověřte Vaši emailovou adresu')
                ->line('Klikněte na tlačítko níže pro ověření Vaší emailové adresy.')
                ->action('Ověřit emailovou adresu', $url)
                ->line('S pozdravem')
                ->salutation('UserCRUD');
        });
    }
}
