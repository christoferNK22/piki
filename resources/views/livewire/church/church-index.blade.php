<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4>Data Gereja</h4>
                <a href="{{ route('master.church.create') }}" class="btn btn-icon icon-left btn-primary"><i
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
                                <th>ID</th>
                                <th>Nama Gereja</th>
                                <th>Alamat</th>
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
                                        {{ $data->id }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $data->name }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $data->address }}
                                    <td>
                                        <a href="{{ route('master.church.edit', ['id' => $data->id]) }}"
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
