@props([
    'theme' => '',
    'enabledFilters' => [],
    'column' => null,
    'inline' => null,
    'inputText' => null,
    'inputTextOptions' => [],
])
<div>
    @php
        $field = data_get($containsText, 'dataField') ?? data_get($containsText, 'field');
    @endphp
    @if(filled($containsText))
        <div @class([
            'p-2' => !$inline,
            $theme->baseClass,
        ]) style="{{ $theme->baseStyle }}">
            @if(!$inline)
                <label class="text-gray-700 dark:text-gray-300">{{ data_get($containsText, 'label') }}</label>
            @endif
            <div @class([
                'sm:flex w-full' => !$inline,
                'flex flex-col' => $inline,
                ])>

                <div @class([
                        'pl-0 pt-1 w-full sm:w-1/2' => !$inline,
                        'mt-1' => $inline,
                    ])>
                    <input
                        data-id="{{ $field }}"
                        @if(isset($enabledFilters[$field]['disabled']) && boolval($enabledFilters[$field]['disabled']) === true) disabled @else
                            wire:model.debounce.800ms="filters.contains_text.{{ $field  }}"
                        wire:input.debounce.800ms="filterContainsText('{{ $field }}', $event.target.value, '{{ data_get($containsText, 'label') }}')"
                        @endif
                        type="search"
                        class="power_grid {{ $theme->inputClass }}"
                        placeholder="{{ empty($column)?data_get($containsText, 'label'):($column->placeholder?:$column->title) }}"/>
                </div>
            </div>
        </div>
    @endif
</div>
