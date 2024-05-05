<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form wire:submit.prevent='savePositions' method="post">

                        {{-- @php
                            dd($positions);
                        @endphp --}}
                        @foreach ($positions as $i => $position)
                            <x-form-label id="title" label='Title' />
                            <x-form-input id="name{{ $i }}" name='name{{ $i }}'
                                wire:model='positions.{{ $i }}.name' />

                            @if ($i > 0)
                                <button wire:click='removePositionInput({{ $i }})'>Hapus</button>
                            @endif
                        @endforeach

                        <button wire:click='addPosition'>Tambah Input</button>
                        <button type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
