<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4>Data Aktifitas</h4>
                <a href="" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Tambah</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="table-1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Aktivitas</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Selesai</th>
                                <th>Title</th>
                                <th>Note</th>
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
                                        {{ $data->activity }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $data->start_date }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $data->finish_date }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $data->title }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $data->note }}
                                    </td>
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
