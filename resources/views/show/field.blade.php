<div class="show-field form-group row">
    <div class="col-sm-{{ $width['label'] }}" style="padding-bottom: 6px; text-transform: capitalize;">
        <span>{{ $label }}</span>
    </div>

    <div class="col-sm-{{ $width['field'] }}">
        @if($wrapped)
            <div class="box box-solid box-default no-margin box-show">
                <div class="box-body">
                    @if($escape)
                        {{ $content }}
                    @else
                        {!! $content !!}
                    @endif
                    @if(is_null($content) || $content === '')
                        &nbsp;
                    @endif
                </div>
            </div>
        @else
            @if($escape)
                {{ $content }}
            @else
                {!! $content !!}
            @endif
        @endif
    </div>
</div>
