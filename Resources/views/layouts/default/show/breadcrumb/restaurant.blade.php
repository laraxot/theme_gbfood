@php
//ddd($params);
$parz = [];
@endphp
<div class="breadcrumb">
    <div class="container">
        <ul itemscope itemtype="http://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="{{ asset(App::getLocale()) }}"
                    itemid='#home'>
                    <span itemprop="name">Home</span>
                </a>
                <meta itemprop="position" content="1" />
            </li>
            @php
                $parz['container0'] = 'location';
            @endphp
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">

                <a itemscope itemtype="http://schema.org/Thing" itemprop="item"
                    href="{{ route('containers.index', $parz) }}" itemid='#location'>
                    <span itemprop="name">Locations</span>
                </a>
                <meta itemprop="position" content="2" />
            </li>
            @php
                //ddd($row->locality);
                $location = $row->locationOrCreate();
                $parz['item0'] = $location;

            @endphp
            {{-- @if (is_object($location))
			{!! $location->listItemSchemaOrg(['position'=>3]) !!}
			@endif --}}
            @php
                $parz['container1'] = 'restaurant';
            @endphp
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemscope itemtype="http://schema.org/Thing" itemprop="item"
                    href="{{ route('containers.index', $parz) }}" itemid='#restaurants'>
                    <span itemprop="name">Restaurants</span>
                </a>
                <meta itemprop="position" content="4" />
            </li>
            @php
                $parz['item1'] = $row;
            @endphp

            {{-- !!$row->listItemSchemaOrg(['position'=>5])!! --}}

        </ul>
    </div>
</div>
