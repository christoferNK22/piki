<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Input Informasi Kontak</h4>
            </div>
            <form class="card-body" wire:submit="save">
                <div class="form-group">
                    <label>Nomor Telepon</label>
                    <input type="text" class="form-control" wire:model="phoneNumber">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" wire:model="email">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" wire:model="address">
                </div>
                <div class="form-group">
                    <label>Lokasi</label>
                    <input type="url" class="form-control" wire:model="mapUrl">
                </div>
                <div class="form-group">
                    <label>WA</label>
                    <input type="url" class="form-control" wire:model="whatsappUrl">
                </div>
                <div class="form-group">
                    <label>Facebook</label>
                    <input type="url" class="form-control" wire:model="facebookUrl">
                </div>
                <div class="form-group">
                    <label>Instagram</label>
                    <input type="url" class="form-control" wire:model="instagramUrl">
                </div>
                <div class="form-group">
                    <label>Twitter</label>
                    <input type="url" class="form-control" wire:model="twitterUrl">
                </div>
                <div class="form-group">
                    <label>Youtube</label>
                    <input type="url" class="form-control" wire:model="youtubeUrl">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
