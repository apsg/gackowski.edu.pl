@extends('layouts.index')

@section('content')

    <!--
            Card - About
        -->
    @include('layouts/sections/about')

    <!--
            Card - Resume
        -->
    @include('layouts/sections/resume')

    <!--
            Card - Works
        -->
    @include('layouts/sections/works')

    <!--
            Card - Blog
        -->
    @include('layouts/sections/blog')

    <!--
            Card - Contacts
        -->
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
