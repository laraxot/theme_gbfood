@php
return;
@endphp
<div class="breadcrumb">
    <div class="container">
        <ul>
            <li>
                <a href="{{ asset(App::getLocale()) }}">Home</a>
            </li>
            @foreach ($items as $item)
                @php
                    $panel = Panel::get($item);
                @endphp
                <li>
                    <a href="{{ $panel->url(['act' => 'index']) }}">
                        {{ $item->post_type }}
                    </a>
                </li>
                <li>
                    <a href="{{ $panel->url(['act' => 'show']) }}">
                        {{ $item->title }}
                    </a>
                </li>
            @endforeach
            @if (count($containers) > count($items))
                @php
                    $tmp = Theme::xotModel(last($containers));
                    $panel_tmp = Panel::get($tmp->first());
                @endphp
                <li>
                    <a href="{{ $panel_tmp->url(['act' => 'index']) }}">
                        {{ last($containers) }}
                    </a>
                </li>
            @endif
        </ul>
    </div>
</div>
