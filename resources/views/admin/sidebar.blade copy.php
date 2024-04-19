<aside class="text-white w-72 px-5 pt-20 h-screen bg-gradient-to-br from-blue-700 to-blue-400 rounded-tr-3xl">
    <p class="mb-20">Menu</p>
    <a href="{{ route('create_rooms.index') }}" class="sidebar-link flex items-center py-3 pl-8 text-sm hover:text-blue-600 hover:bg-white rounded-l-full">
        <i class="fas fa-plus-circle mr-2"></i> Create Rooms
    </a>
    <a href="{{ route('view_rooms.index') }}" class="sidebar-link flex items-center py-3 pl-8 text-sm hover:text-blue-600 hover:bg-white rounded-l-full">
        <i class="fas fa-eye mr-2"></i> View Rooms
    </a>
    <a href="{{ route('update_rooms.index') }}" class="sidebar-link flex items-center py-3 pl-8 text-sm hover:text-blue-600 hover:bg-white rounded-l-full">
        <i class="fas fa-edit mr-2"></i> Update Rooms
    </a>
    <a href="{{ route('users.index') }}" class="sidebar-link flex items-center py-3 pl-8 text-sm hover:text-blue-600 hover:bg-white rounded-l-full">
        <i class="fas fa-users mr-2"></i> View Users
    </a>
    <a href="{{ route('settings.index') }}" class="sidebar-link flex items-center py-3 pl-8 text-sm hover:text-blue-600 hover:bg-white rounded-l-full">
        <i class="fas fa-cogs mr-2"></i> Admin Settings
    </a>
    <a href="{{ route('transactions.index') }}" class="sidebar-link flex items-center py-3 pl-8 text-sm hover:text-blue-600 hover:bg-white rounded-l-full">
        <i class="fas fa-list-alt mr-2"></i> View Transactions
    </a>
    <a href="{{ route('analytics.index') }}" class="sidebar-link flex items-center py-3 pl-8 text-sm hover:text-blue-600 hover:bg-white rounded-l-full">
        <i class="fas fa-chart-line mr-2"></i> Analytics Traffic
    </a>
</aside>
