<x-jet-action-section>
    <x-slot name="title">
        {{ __('Elimina account') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Elimina definitivamente il tuo account.') }}
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            {{ __('Una volta che il tuo account sarà eliminato, tutte le risorse e i dati andranno persi definitivamente. Prima di eliminare il tuo account, per favore scarica tutti i dati e le informazioni che vuoi conservare.') }}
        </div>

        <div class="mt-5">
            <x-jet-danger-button wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                {{ __('Elimina Account') }}
            </x-jet-danger-button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <x-jet-dialog-modal wire:model="confirmingUserDeletion">
            <x-slot name="title">
                {{ __('Elimina Account') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Sei sicuro di voler eliminare il tuo account? Una volta eliminato, tutte le risorse e i dati andranno persi definitivamente. Per favore inserisci la tua password per confermare di voler eliminare permanentemente il tuo account.') }}

                <div class="mt-4" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-jet-input type="password" class="mt-1 block w-3/4" placeholder="Password"
                                x-ref="password"
                                wire:model.defer="password"
                                wire:keydown.enter="deleteUser" />

                    <x-jet-input-error for="password" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                    {{ __('Non importa') }}
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-2" wire:click="deleteUser" wire:loading.attr="disabled">
                    {{ __('Elimina l\'Account') }}
                </x-jet-danger-button>
            </x-slot>
        </x-jet-dialog-modal>
    </x-slot>
</x-jet-action-section>
