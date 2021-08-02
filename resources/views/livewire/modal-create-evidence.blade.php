<div>

    <x-jet-button wire:click="$set('open', 'true')">
        Crear Evidencia
    </x-jet-button>

    <x-jet-dialog-modal wire:model="open">
            <x-slot name="title">
                Registrar nuevo caso con evidencia.
            </x-slot>

            <x-slot name="content">
                <div class="mb-4">
                    <x-jet-label value="Titulo de la Evidencia"></x-jet-label>
                    <x-jet-input name="name" type="text"></x-jet-input>
                </div>
            </x-slot>

            <x-slot name="footer">
                <div class="mb-4">

                </div>
            </x-slot>
    </x-jet-dialog-modal>

</div>
