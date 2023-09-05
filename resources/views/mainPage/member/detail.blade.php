@extends('layoutsAdmin.app')
@section('title', 'Detail Member')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('path/ke/foto/member/'.$member->foto) }}" alt="Foto Member" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $member->nama }}</h5>
                        <p class="card-text">
                            <strong>No:</strong> {{ $member->no }}<br>
                            <strong>Kontak:</strong> {{ $member->kontak }}<br>
                            <strong>Email:</strong> {{ $member->email }}<br>
                            <strong>Alamat:</strong> {{ $member->alamat }}<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
