@extends('layout.app')
@section('content')
    <div class="row">
        <div class="col-xl-5 box-col-12 des-xl-100">
            <div class="row">
                @livewire('create-short-link')
            </div>
        </div>

        <div class="col-xl-7 box-col-12 des-xl-100">
            @livewire('link-generate')
        </div>
    </div>
@endsection
