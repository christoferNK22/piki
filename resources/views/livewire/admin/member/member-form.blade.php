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
                        <label>Kontak</label>
                        <input type="text" class="form-control" wire:model="contact">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" wire:model="address">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" wire:model="gender">
                            <option value="" selected disabled>Pilih gender:</option>
                            <option value="male">Laki</option>
                            <option value="female">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>YearIn</label>
                        <input type="text" class="form-control" wire:model="yearIn">
                    </div>
                    <div class="form-group">
                        <label>Gereja</label>
                        <select class="form-control" wire:model="churchId">
                            <option value="" selected disabled>Pilih Gereja</option>
                            @foreach ($churches as $church)
                                <option value="{{ $church->id }}">{{ $church->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Edukasi</label>
                        <select class="form-control" wire:model="educationId">
                            <option value="" selected disabled>Pilih Edukasi</option>
                            @foreach ($educations as $edu)
                                <option value="{{ $edu->id }}">{{ $edu->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Bidang Minat</label>
                        <select class="form-control" wire:model="interestId">
                            <option value="" selected disabled>Pilih Bidang Minat</option>
                            @foreach ($interests as $interest)
                                <option value="{{ $interest->id }}">{{ $interest->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
