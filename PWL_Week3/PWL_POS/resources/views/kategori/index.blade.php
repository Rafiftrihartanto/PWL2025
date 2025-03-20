@extends('layout.app')

{{-- customize layout seection --}}

@section('subtitle', 'Kategori')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Kagegori')

@section('content')
        <div class="container">
            <div class="card">
                <div class="card_header">Manage Kategori</div>
                <div class="card_body">
                    {{ $dataTable->table() }}
                </div>
            </div>
        </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts() }}
@endpush