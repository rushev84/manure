<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{ route('admin.manure.index') }}" class="nav-link">
                <p>Удобрения</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.culture.index') }}" class="nav-link">
                <p>Культуры</p>
            </a>
        </li>
        @can('view', auth()->user())
        <li class="nav-item">
            <a href="{{ route('admin.client.index') }}" class="nav-link">
                <p>Клиенты</p>
            </a>
        </li>
        @endcan
    </ul>
</nav>
