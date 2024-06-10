<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Děkujeme za registraci! Než začnete aplikaci používat, prosím, ověřte svoji emailovou adresu kliknutím na odkaz v e-mailu, kteý jsme Vám právě poslali. Pokud Vám e-mail nedorazil, rádi Vám ho pošleme znovu.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('Nový odkaz pro ověření byl odeslán na emailovou adresu, kterou jste zadali při registraci.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('labels.resend') }}
                </x-primary-button>
            </div>
        </form>
    </div>
    <br>
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            {{ __('labels.logout') }}
        </button>
    </form>
</x-guest-layout>
