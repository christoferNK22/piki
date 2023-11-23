<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4>Data Pengurus</h4>
                <a href="{{ route('cms.pengurus.create') }}" class="btn btn-icon icon-left btn-primary"><i
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
                                <th>Dewan</th>
                                <th>Jabatan</th>
                                <th>Asal</th>
                                <th>Foto</th>
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
                                        {{ $data->name }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $data->dewan }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $data->position }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $data->origin }}
                                    </td>
                                    <td class="align-middle">
                                        <figure class="avatar mr-2 avatar-xl">
                                            <img src="{{ asset(!empty($data->image) ? "storage/{$data->image}" : 'img/avatar/avatar-1.png') }}"
                                                alt="{{ $data->name }}">
                                        </figure>
                                    </td>
                                    <td>
                                        <a href="{{ route('cms.pengurus.edit', ['id' => $data->id]) }}"
                                            class="btn btn-secondary">Edit</a>
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
