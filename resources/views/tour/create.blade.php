@extends('layouts.form')

@section('scripts')
    @parent
    <script>
        $(function() {
            $('#description').summernote();
        });
    </script>
@endsection