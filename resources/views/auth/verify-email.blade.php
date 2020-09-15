<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Grazie per esserti iscritto! Prima di iniziare, verifica il tuo indirizzo email facendo click sul link che ti abbiamo appena inviato? Se non hai ricevuto nessun codice, te ne invieremo un altro.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('Un nuovo link di verifica è stato inviato all'indirizzo di posta inserito durante la registrazione.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="/email/verification-notification">
                @csrf

                <div>
                    <x-jet-button type="submit">
                        {{ __('Reinvia l'email di conferma') }}
                    </x-jet-button>
                </div>
            </form>

            <form method="POST" action="/logout">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Logout') }}
                </button>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
