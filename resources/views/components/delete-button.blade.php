<form action="{{ $href }}" method="POST" onsubmit="return confirm('{{ __('keywords.are_you_sure') }}')"
    class="d-inline">
    @method('DELETE')
    @csrf
    <button type="submit" class="btn btn-sm btn-danger m-1">
        <i class="fe fe-trash-2 fa-2x"></i>
    </button>
</form>
{{-- <div>
    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
</div> --}}
