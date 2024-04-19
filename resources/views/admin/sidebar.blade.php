<aside class="text-white w-72 px-5 pt-20 h-screen bg-gradient-to-br from-blue-700 to-blue-400 rounded-tr-3xl">
    <p class="mb-20">Menu</p>
    <a href="#" wire:click="$emit('changeComponent', 'CreateRooms')" class="sidebar-link flex items-center py-3 pl-8 text-sm hover:text-blue-600 hover:bg-white rounded-l-full">
        <i class="fas fa-plus-circle mr-2"></i> Create Rooms
    </a>
    <a href="#" wire:click="$emit('changeComponent', 'ViewRooms')" class="sidebar-link flex items-center py-3 pl-8 text-sm hover:text-blue-600 hover:bg-white rounded-l-full">
        <i class="fas fa-eye mr-2"></i> View Rooms
    </a>
    <a href="#" wire:click="$emit('changeComponent', 'UpdateRooms')" class="sidebar-link flex items-center py-3 pl-8 text-sm hover:text-blue-600 hover:bg-white rounded-l-full">
        <i class="fas fa-edit mr-2"></i> Update Rooms
    </a>
    <a href="#" wire:click="$emit('changeComponent', 'ViewUsers')" class="sidebar-link flex items-center py-3 pl-8 text-sm hover:text-blue-600 hover:bg-white rounded-l-full">
        <i class="fas fa-users mr-2"></i> View Users
    </a>
    <a href="#" wire:click="$emit('changeComponent', 'AdminSettings')" class="sidebar-link flex items-center py-3 pl-8 text-sm hover:text-blue-600 hover:bg-white rounded-l-full">
        <i class="fas fa-cogs mr-2"></i> Admin Settings
    </a>
    <a href="#" wire:click="$emit('changeComponent', 'ViewTransactions')" class="sidebar-link flex items-center py-3 pl-8 text-sm hover:text-blue-600 hover:bg-white rounded-l-full">
        <i class="fas fa-list-alt mr-2"></i> View Transactions
    </a>
    <a href="#" wire:click="$emit('changeComponent', 'AnalyticsTraffic')" class="sidebar-link flex items-center py-3 pl-8 text-sm hover:text-blue-600 hover:bg-white rounded-l-full">
        <i class="fas fa-chart-line mr-2"></i> Analytics Traffic
    </a>
</aside>