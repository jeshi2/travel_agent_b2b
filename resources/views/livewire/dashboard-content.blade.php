<div>
    {{-- The whole world belongs to you. --}}<h1>Hello</h1>
    @if($component === 'CreateRooms')
        <livewire:create-rooms />
    @elseif($component === 'ViewRooms')
        <livewire:view-rooms />
    @elseif($component === 'UpdateRooms')
        <livewire:update-rooms />
    @elseif($component === 'ViewUsers')
        <livewire:view-users />
    @elseif($component === 'AdminSettings')
        <livewire:admin-settings />
    <!-- Add more conditions for other components -->
    @endif
</div>