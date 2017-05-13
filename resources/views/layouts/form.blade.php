@extends('layouts.app')

@section('styles')
    @parent
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        {!! form($form) !!}
    </div>
@endsection

@section('scripts')
    @parent
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.js"></script>
@endsection