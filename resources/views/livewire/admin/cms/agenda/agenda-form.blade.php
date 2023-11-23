<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Input Agenda</h4>
            </div>
            <form class="card-body" wire:submit="save">
                <div class="form-group">
                    <label>Nama Kegiatan</label>
                    <input type="text" class="form-control" wire:model="activity">
                </div>
                <div class="form-group">
                    <label>Hari & Tanggal Mulai</label>
                    <input type="date" class="form-control" wire:model="startDate">
                </div>
                <div class="form-group">
                    <label>Hari & Tanggal Selesai</label>
                    <input type="date" class="form-control" wire:model="finishDate">
                </div>
                <div class="form-group">
                    <label>Tema Kegiatan</label>
                    <input type="text" class="form-control" wire:model="title">
                </div>
                <div class="form-group">
                    <label>Deskripsi Kegiatan</label></label>
                    <textarea class="form-control" wire:model="note"></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
