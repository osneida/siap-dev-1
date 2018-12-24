@if ($item['submenu'] == [])
    <li>
        <a style="color:#800000 !important;" href="{{ url($item['slug']) }}">{{ $item['name'] }} </a>
    </li>
@else
    <li class="dropdown">
        <a href="#" style="color:#932700 !important;" class="dropdown-toggle" data-toggle="dropdown">{{ $item['name'] }} <span></span></a>
        <ul class="dropdown-menu forAnimate" role="menu">
            @foreach ($item['submenu'] as $submenu)
                @if ($submenu['submenu'] == [])
                    <!--<li><a href="{{ url('menu',['id' => $submenu['id'], 'slug' => $submenu['slug']]) }}">{{ $submenu['name'] }} </a></li>-->
                    <li><a style="color:#800000 !important;" href="{{ url($submenu['slug']) }}">{{ $submenu['name'] }} </a></li>
                @else
                    @include('partials.menuvert-item', [ 'item' => $submenu ])
                @endif
            @endforeach
        </ul>
    </li>
@endif





        