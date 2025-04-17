@can('edit', $row)

    <div class="color-palate">
        <div class="color-trigger">
            <i class="fa fa-gear"></i>
        </div>
        <div class="color-palate-head">
            <h6>@lang($trad_default.'.manage')</h6>
        </div>
        <br>
        <div class="palate-foo">
            @if (!isset($params['container1']))
                <a href="{{ route('containers.edit', $params) }}" class="btn theme-btn">
                    @lang($trad_default.'.edit_page')<i class="fa fa-edit ml-1"></i>
                </a>
            @else
                <a href="{{ route('containers.index_edit', $params) }}" class="btn theme-btn">
                    @lang($trad_default.'.edit_page')<i class="fa fa-edit"></i>
                </a>
            @endif
            @include('pub_theme::layouts.partials.btns.translate_manager')
            <span>@lang($trad_default.'.more_opt')</span>
        </div>
    </div>
    {{ Theme::add('theme/pub/js/color-settings.js') }}
    {{ Theme::add('theme/pub/css/color-switcher-design.css') }}
    @include('extend::modal_ajax')
@else
    {{-- ddd('no diritto') --}}
@endcan
