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

            </div>

        </div>
    </div>

</x-filament-panels::page>