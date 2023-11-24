<div>
    <div class="row">
        <div class="col-12">
            <form action="">
                <div class="form-group">
                    <label for="">Gereja</label>
                    <select name="" id="" class="form-control" wire:model.live="churchId"
                        wire:change="calculateSumMember">
                        <option value="" selected>Semua Gereja</option>
                        @foreach ($churches as $church)
                            <option value="{{ $church->id }}">{{ $church->name }}</option>
                        @endforeach
                    </select>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Pengurus</h4>
                    </div>
                    <div class="card-body">
                        {{ $sumPengurus }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Gereja</h4>
                    </div>
                    <div class="card-body">
                        {{ $sumChurch }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-2">
                <div class="card-stats">
                    <div class="card-stats-title">
                    </div>
                    <div class="card-stats-items">
                        <div class="card-stats-item">
                            <div class="card-stats-item-count">{{ $newMember }}</div>
                            <div class="card-stats-item-label">Baru</div>
                        </div>
                        <div class="card-stats-item">
                            <div class="card-stats-item-count">{{ $oldMember }}</div>
                            <div class="card-stats-item-label">Lama</div>
                        </div>
                        <div class="card-stats-item">
                            <div class="card-stats-item-count">{{ $newMember + $oldMember }}</div>
                            <div class="card-stats-item-label">Total</div>
                        </div>
                    </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                    <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Member</h4>
                    </div>
                    <div class="card-body">{{ $newMember + $oldMember }}</div>
                </div>
            </div>
        </div>
    </div>


</div>
