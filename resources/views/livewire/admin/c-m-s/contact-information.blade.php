<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Input Text</h4>
            </div>
            <form class="card-body" wire:submit="save">
                <div class="form-group">
                    <label>Nomor Telepon</label>
                    <input type="text" class="form-control" wire:model="phone_number">
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
                    <input type="url" class="form-control" wire:model="map_url">
                </div>
                <div class="form-group">
                    <label>WA</label>
                    <input type="url" class="form-control" wire:model="whatsapp_url">
                </div>
                <div class="form-group">
                    <label>Facebook</label>
                    <input type="url" class="form-control" wire:model="facebook_url">
                </div>
                <div class="form-group">
                    <label>Instagram</label>
                    <input type="url" class="form-control" wire:model="instagram_url">
                </div>
                <div class="form-group">
                    <label>Twitter</label>
                    <input type="url" class="form-control" wire:model="twitter_url">
                </div>
                <div class="form-group">
                    <label>Youtube</label>
                    <input type="url" class="form-control" wire:model="youtube_url">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
