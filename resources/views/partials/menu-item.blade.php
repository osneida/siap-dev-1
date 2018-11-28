@if ($item['submenu'] == [])
    <li class="dropdown mega-dropdown">
        <a href="{{ url($item['name']) }}">{{ $item['name'] }} </a>
    </li>
@else
    <li class="dropdown mega-dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ $item['name'] }} <span class=""></span></a>
        <ul class="dropdown-menu sub-menu">
            @foreach ($item['submenu'] as $submenu)
                @if ($submenu['submenu'] == [])
                    <!-- <li><a href="{{ url('menu',['id' => $submenu['id'], 'slug' => $submenu['slug']]) }}">{{ $submenu['name'] }} </a></li> -->
                    <li><a href="{{ $submenu['slug'] }}">{{ $submenu['name'] }} </a></li>
                @else
                    @include('partials.menu-item', [ 'item' => $submenu ])
                @endif
            @endforeach
        </ul>
    </li>
@endif
