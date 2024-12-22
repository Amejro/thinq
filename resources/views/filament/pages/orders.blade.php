<x-filament-panels::page>
    <!-- Orders stats -->


    <!-- Orders table -->
    <div class='grid grid-cols-3 gap-4'>
        <div class='col-span-2'>
            {{$this->table}}
        </div>

        <!-- Order details card -->
        <div class='col-span-1 h-full flex flex-col justify-between'>
            <div class='flex justify-between items-center'>
                <x-ik-map class='size-5' />
                <div class='text-xl font-bold'>
                    <x-filament::input.wrapper class=' bg-[#004581] '>
                        <x-filament::input type="date" wire:model="name" class='text-white' />
                    </x-filament::input.wrapper>
                </div>

                <x-filament::button wire:click="openNewUserModal" class=' bg-[#004581] text-white'>
                    <div class='flex items-center space-x-2'>
                        <x-heroicon-m-arrow-up-right class='size-3' />
                        <span>View full panel</span>
                    </div>
                </x-filament::button>


            </div>
            <div class='bg-white h-60 rounded-lg'>
                @if ($data)
                    <div class="p-4 bg-gray-100 border rounded">
                        <h3 class="text-lg font-bold">Row Preview</h3>
                        <p><strong>ID:</strong> {{ $data->id }}</p>

                    </div>
                @else
                    <p>No row selected for preview.</p>
                @endif
            </div>

        </div>
    </div>

    <x-filament-actions::modals />

</x-filament-panels::page>