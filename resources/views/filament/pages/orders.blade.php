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
            <div class='bg-white  rounded-lg p-4 space-y-4'>
                <!-- Header -->
                <div class='flex justify-between items-center  '>
                    <div class='flex  items-center space-x-3'>
                        <div class=' flex items-center justify-center rounded-full bg-[#DDE8F0] size-8'>
                            <x-phosphor-circle-dashed-bold class=' size-5 ' />

                        </div>
                        <div>#OR86356</div>
                    </div>
                    <div class=' flex items-center justify-center rounded-full bg-[#DDE8F0] size-8'>
                        <x-ri-plane-fill class='size-5 ' />
                    </div>
                </div>

                <!-- Body -->

                <div>

                </div>

                <!-- Footer -->
                <div class='flex justify-between items-center'>

                    <div class='flex items-center space-x-2 font-light'>
                        <div class='rounded-full bg-[#004581] size-10'></div>

                        <div>
                            <div class='text-xs'>Receiver</div>
                            <div class='text-[#004581] text-sm capitalize'>Samuel Dadson</div>
                        </div>

                    </div>

                    <div>
                        <div class='text-xs'>Received</div>
                        <div class='text-[#004581] text-sm capitalize'>Mar 05 2014 16:30</div>
                    </div>

                    <div>
                        <div class='text-xs'>Destination</div>
                        <div class='text-[#004581] text-sm capitalize'>Accra Ghana</div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <x-filament-actions::modals />

</x-filament-panels::page>