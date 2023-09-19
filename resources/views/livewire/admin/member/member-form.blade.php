    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Form Member</h4>
                </div>
                <form class="card-body" wire:submit="save">
                    <div class="form-group">
                        <label>Nama Member</label>
                        <input type="text" class="form-control" wire:model="name">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" wire:model="email">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" wire:model="address">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control" wire:model="bod">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
