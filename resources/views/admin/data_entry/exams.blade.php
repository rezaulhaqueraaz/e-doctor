@extends('layouts.backend.app')
@section('title','Exams')
@push('topcss')
@endpush
@push('css')
@endpush
@push('topjs')
@endpush
@section('content')
    <div class="container">
        <exams-component></exams-component>
    </div>
@endsection
@push('js')
@endpush
