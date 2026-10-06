@if(!empty($items))
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 small">
            @foreach($items as $item)
                @if($loop->last || empty($item[1]))
                    <li class="breadcrumb-item active" aria-current="page">{{ $item[0] }}</li>
                @else
                    <li class="breadcrumb-item"><a href="{{ $item[1] }}">{{ $item[0] }}</a></li>
                @endif
            @endforeach
        </ol>
    </nav>
@endif
