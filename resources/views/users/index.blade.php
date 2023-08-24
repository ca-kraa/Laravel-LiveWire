@extends('layouts.master')

@push('styles')
@livewireStyles
@endpush

@push('scripts')
    @livewireScripts
@endpush

@section('content')
<div class="container">
    <h1 class="mb-4">CRUD With Livewire</h1>
    <div class="row">
        <div class="col-md-8">
            @livewire('user-create')
        </div>
    </div>
    <div>
        @livewire('user-table')
    </div>
</div>
@endsection
