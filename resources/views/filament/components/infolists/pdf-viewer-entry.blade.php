<x-dynamic-component :component="$getEntryWrapperView()" :entry="$entry">
    <div class="fi-sc-flex">
        @if(!empty($getState()))
            <embed
                type="application/pdf"
                class="fi-growable"
                src="{{ $getRoute($getState()) }}" style="min-height: {{ $getMinHeight() }};">
        @elseif(!empty($getFileUrl()))
            <embed
                type="application/pdf"
                class="fi-growable"
                src="{{ $getFileUrl() }}" style="min-height: {{ $getMinHeight() }};">
        @endif
    </div>
</x-dynamic-component>
