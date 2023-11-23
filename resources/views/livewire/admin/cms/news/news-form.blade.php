<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Input Berita</h4>
            </div>
            <form class="card-body" wire:submit="save">
                <div class="form-group">
                    <label>Judul</label>
                    <textarea class="form-control" wire:model="title"></textarea>
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control" wire:model="content"></textarea>
                </div>
                <div class="form-group">
                    <label>Gambar</label>
                    <input type="file" class="form-control" wire:model="image_news" accept="image/*" >
                        @if (isset($currentImageNews) && !is_null($currentImageNews))
                            <figure class="avatar mr-2 avatar-xl">
                                <img src="{{ asset("storage/{$currentImageNews}") }}" alt="{{ $name }}">
                            </figure>
                        @endif
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>