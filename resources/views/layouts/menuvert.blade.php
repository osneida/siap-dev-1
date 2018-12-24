<!-- <nav class="navbar navbar-default">
    <div class="container-fluid"> -->
        <div class="collapse navbar-collapse" style="background-color:#e3e4e5 !important; color:#800000 !important;">
            <ul class="nav navbar-nav">
                @foreach ($menus as $key => $item)
                    @if ($item['parent'] != 0)
                        @break
                    @endif
                    @include('partials.menuvert-item', ['item' => $item])
                @endforeach
            </ul>
        </div>
<!--  </div>
</nav>-->