<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4>Data Berita</h4>
                <a href="{{ route('cms.berita.create') }}" class="btn btn-icon icon-left btn-primary"><i
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
                                <th>Judul</th>
                                <th>Deskripsi</th>
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
                                        {{ $data->title }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $data->content }}
                                    </td>
                                    <td class="align-middle">
                                        <figure class="avatar mr-2 avatar-xl">
                                            <img src="{{ asset(!empty($data->image_news) ? "storage/{$data->image_news}" : 'img/avatar/avatar-1.png') }}"
                                                alt="{{ $data->name }}">
                                        </figure>

                                    </td>
                                    <td>
                                        <a href="{{ route('cms.berita.edit', ['id' => $data->id]) }}"
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
