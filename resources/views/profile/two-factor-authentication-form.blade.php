<x-jet-action-section>
    <x-slot name="title">
        {{ __('Autenticazione a due fattori') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Migliora la sicurezza del tuo account usando l\'autenticazione a due fattori.') }}
    </x-slot>

    <x-slot name="content">
        <h3 class="text-lg font-medium text-gray-900">
            @if ($this->enabled)
                {{ __('Hai attivato l\'autenticazione a due fattori.') }}
            @else
                {{ __('Non hai attivato l\'autenticazione a due fattori.') }}
            @endif
        </h3>

        <div class="mt-3 max-w-xl text-sm text-gray-600">
            <p>
                {{ __('Quando l\'autenticazione a due fattori è attivata, ti verrà richiesto un token sicuro e casuale durante l\'autenticazione. Potrai recuperare questo token dall\'applicazione Google Authenticator installata sul tuo telefono.') }}
            </p>
        </div>

        @if ($this->enabled)
            @if ($showingQrCode)
                <div class="mt-4 max-w-xl text-sm text-gray-600">
                    <p class="font-semibold">
                        {{ __('Hai attivato l\'autenticazione a due fattori. Scansiona il seguente QR code dall\'applicazione Google Authenticator installata sul tuo telefono.') }}
                    </p>
                </div>

                <div class="mt-4">
                    {!! $this->user->twoFactorQrCodeSvg() !!}
                </div>
            @endif

            @if ($showingRecoveryCodes)
                <div class="mt-4 max-w-xl text-sm text-gray-600">
                    <p class="font-semibold">
                        {{ __('Conserva questi codici di recupero in un gestore delle password sicuro. Possono essere utilizzati per recuperare l\'accesso in caso il dispositivo per l\'autenticazione vada perso.') }}
                    </p>
                </div>

                <div class="grid gap-1 max-w-xl mt-4 px-4 py-4 font-mono text-sm bg-gray-100 rounded-lg">
                    @foreach (json_decode(decrypt($this->user->two_factor_recovery_codes), true) as $code)
                        <div>{{ $code }}</div>
                    @endforeach
                </div>
            @endif
        @endif

        <div class="mt-5">
            @if (! $this->enabled)
                <x-jet-button type="button" wire:click="enableTwoFactorAuthentication" wire:loading.attr="disabled">
                    {{ __('Attiva') }}
                </x-jet-button>
            @else
                @if ($showingRecoveryCodes)
                    <x-jet-secondary-button class="mr-3" wire:click="regenerateRecoveryCodes">
                        {{ __('Rigenera i Codici di recupero') }}
                    </x-jet-secondary-button>
                @else
                    <x-jet-secondary-button class="mr-3" wire:click="$toggle('showingRecoveryCodes')">
                        {{ __('Mostra i Codici di recupero') }}
                    </x-jet-secondary-button>
                @endif

                <x-jet-danger-button wire:click="disableTwoFactorAuthentication" wire:loading.attr="disabled">
                    {{ __('Disattiva') }}
                </x-jet-danger-button>
            @endif
        </div>
    </x-slot>
</x-jet-action-section>
