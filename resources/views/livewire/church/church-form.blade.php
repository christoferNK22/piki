    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Input Text</h4>
                </div>
                <form class="card-body" wire:submit="save">
                    <div class="form-group">
                        <label>Nama Gereja</label>
                        <input type="text" class="form-control" wire:model="name">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" wire:model="address">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
