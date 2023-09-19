<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4>Data Member</h4>
                <a href="{{ route('master.member.create') }}" class="btn btn-icon icon-left btn-primary"><i
                        class="far fa-edit"></i> Tambah</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="table-1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Member</th>
                                <th>Nama</th>
                                <th>Tanggal Lahir</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>Gereja</th>
                                <th>Bidang Minat</th>
                                <th>Status</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $i => $data)
                                <tr>
                                    <td>
                                        {{ $i + 1 }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $data->member_identity }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $data->name }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $data->bod_format }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $data->email }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $data->address }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $data->church->name }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $data->interest->name }}
                                    </td>
                                    <td class="align-middle">
                                        <figure class="avatar mr-2 avatar-xl">
                                            <img src="{{ asset(!empty($data->image_path) ? "storage/{$data->image_path}" : 'img/avatar/avatar-1.png') }}"
                                                alt="{{ $data->name }}">
                                            @if ($data->is_verified)
                                                <i class="avatar-presence online"></i>
                                            @else
                                                <i class="avatar-presence busy"></i>
                                            @endif
                                        </figure>

                                    </td>
                                    <td>
                                        <a href="{{ route('master.member.edit', ['id' => $data->id]) }}"
                                            class="btn btn-secondary">Edit</a>
                                        <button wire:click="toggleVerifiedMember({{ $data->id }})"
                                            class="btn btn-warning">{{ $data->is_verified ? 'Non Active' : 'Active' }}</button>
                                        <button wire:click="delete({{ $data->id }})"
                                            class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
