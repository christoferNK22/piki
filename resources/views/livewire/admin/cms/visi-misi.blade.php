<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Input Visi Misi</h4>
            </div>
            <form class="card-body" wire:submit="save">
                <div class="form-group">
                    <label>Pertama</label>
                    <textarea class="form-control" wire:model="visi1"></textarea>
                </div>
                <div class="form-group">
                    <label>Kedua</label>
                    <textarea class="form-control" wire:model="visi2"></textarea>
                </div>
                <div class="form-group">
                    <label>Ketiga</label>
                    <textarea class="form-control" wire:model="visi3"></textarea>
                </div>
                <div class="form-group">
                    <label>Keempat</label>
                    <textarea class="form-control" wire:model="visi4"></textarea>
                </div>
                <div class="form-group">
                    <label>Kelima</label>
                    <textarea class="form-control" wire:model="visi5"></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>