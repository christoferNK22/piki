<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Input Profil</h4>
            </div>
            <form class="card-body" wire:submit="save">
                <div class="form-group">
                    <label>Sejarah</label>
                    <textarea row="4" cols="50" class="form-control" wire:model="sejarah"></textarea>
                </div>
                <div class="form-group">
                    <label>Pondasi</label>
                    <textarea class="form-control" wire:model="foundation"></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>