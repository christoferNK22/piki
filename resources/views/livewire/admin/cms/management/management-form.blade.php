<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Input Pengurus</h4>
            </div>
            <form class="card-body" wire:submit="save">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" wire:model="name">
                </div>
                <div class="form-group">
                    <label>Pilihan Dewan</label>
                    <select class="form-control" wire:model="dewan" required>
                        <option value="" selected disabled>Dewan:</option>
                        <option value="penasihat">Penasihat</option>
                        <option value="pakar">Pakar</option>
                        <option value="pengurus">Pengurus</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Pilihan Jabatan</label>
                    <select class="form-control" wire:model="position" required>
                        <option value="" selected disabled>Jabatan:</option>
                        <option value="ketua">Ketua</option>
                        <option value="wakil_ketua">Wakil Ketua</option>
                        <option value="sekertaris">Sekertaris</option>
                        <option value="wakil_sekertaris">Wakil Sekertaris</option>
                        <option value="bendahara">Bendahara</option>
                        <option value="wakil_bendahara">Wakil Bendahara</option>
                        <option value="anggota">Anggota</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Asal Pengurus</label>
                    <input type="text" class="form-control" wire:model="origin">
                </div>
                <div class="form-group">
                    <label>Foto Pengurus</label>
                    <input type="file" class="form-control" wire:model="image" accept="image/*" >
                        @if (isset($currentImage) && !is_null($currentImage))
                            <figure class="avatar mr-2 avatar-xl">
                                <img src="{{ asset("storage/{$currentImage}") }}" alt="{{ $name }}">
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