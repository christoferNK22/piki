@extends('layouts.partials-admin.app')
@section('title', 'Member')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>Data Member</h4>
                    <a href="{{ route('mainPage.member.create') }}" class="btn btn-icon icon-left btn-primary"><i
                            class="far fa-edit"></i> Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>Nama</th>
                                    <th>Kontak</th>
                                    <th>Alamat</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 0; $i < 20; $i++)
                                    <tr>
                                        <td>
                                            {{ $i + 1 }}
                                        </td>
                                        <td class="align-middle">
                                            Nama
                                        </td>
                                        <td class="align-middle">
                                            Kontak
                                        </td>
                                        <td class="align-middle">
                                            Alamat
                                        <td><a href="{{ route('mainPage.member.detail') }}"
                                                class="btn btn-secondary">Edit</a></td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
