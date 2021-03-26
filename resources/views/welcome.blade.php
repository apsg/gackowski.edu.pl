@extends('layouts.index')

@section('content')

    @include('layouts/sections/about')
    @include('layouts/sections/resume')
    @include('layouts/sections/works')
    @include('layouts/sections/blog')
    @include('layouts/sections/contact')

@endsection

@push('scripts')
    @if(isset($section))
        <script type="text/javascript">
            $(document).ready(function () {
                $('.card-inner').removeClass('active');
                $('#{{ $section }}-card')
                    .removeClass('hidden')
                    .addClass('active');

                $('.top-menu li').removeClass('active');
            });
        </script>
    @endif
@endpush
