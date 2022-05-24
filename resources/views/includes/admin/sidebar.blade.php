<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-header">УДОБРЕНИЯ</li>
        <li class="nav-item">
            <a href="{{ route('admin.manure.index') }}" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>Список удобрений</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.manures_import.ui') }}" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>Импорт/экспорт</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.manure.index') }}" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>Статусы импортов</p>
            </a>
        </li>
        <li class="nav-header">КУЛЬТУРЫ</li>

        <li class="nav-item">
            <a href="{{ route('admin.culture.index') }}" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                    Список культур
                </p>
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
