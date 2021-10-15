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
                <x-jet-input name="file" type="file"  wire:model.defer="file"></x-jet-input>

                @error('file') <span class="error">{{ $message }}</span> @enderror
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open', 'false')">
                Cancelar
            </x-jet-secondary-button  >

            <x-jet-button wire:click="save">
                Crear
            </x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>

</div>
