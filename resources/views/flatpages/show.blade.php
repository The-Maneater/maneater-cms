@extends('layouts.app')

@section('content')
    {!! $flatpage->content !!}
@endsection

@section('main-scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $("li.students a").on('click', function(){
                $("div.is-active").css("display", "none");
                $("div.is-active").removeClass("is-active");
                var href = $(this).attr("href");
                var parent = $(href).parent();
                parent.addClass("is-active");
                parent.css("display", "block");
            });
        });
    </script>
@endsection