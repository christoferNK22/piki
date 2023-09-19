<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                    <div class="login-brand">
                        <img src="{{ asset('img/piki-logo-dark-e.png') }}" alt="logo" width="125" class="img">
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Register</h4>
                        </div>

                        <div class="card-body">
                            <form wire:submit="register">
                                <div class="form-group">
                                    <label for="email">Name</label>
                                    <input id="email" type="text" class="form-control" name="email"
                                        wire:model="name">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control" name="email"
                                        wire:model="email">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email">BOD</label>
                                    <input id="email" type="date" class="form-control" name="email"
                                        wire:model="bod">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="password" class="d-block">Password</label>
                                        <input id="password" type="password" class="form-control pwstrength"
                                            data-indicator="pwindicator" name="password" wire:model="password">
                                        <div id="pwindicator" class="pwindicator">
                                            <div class="bar"></div>
                                            <div class="label"></div>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="password2" class="d-block">Password Confirmation</label>
                                        <input id="password2" type="password" class="form-control"
                                            name="password-confirm" wire:model="passwordConfirm">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email">Alamat</label>
                                    <input id="email" type="text" class="form-control" name="email"
                                        wire:model="address">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Contact</label>
                                    <input id="email" type="number" class="form-control" name="email"
                                        wire:model="contact">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email">Gender</label>
                                    <select class="form-control" wire:model="gender">
                                        <option value="" selected disabled>Pilih gender:</option>
                                        <option value="male">Laki</option>
                                        <option value="female">Perempuan</option>
                                    </select>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="password" class="d-block">Tahun Masuk</label>
                                        <input id="password" type="number" class="form-control pwstrength"
                                            data-indicator="pwindicator" name="password" wire:model="yearIn">
                                        <div id="pwindicator" class="pwindicator">
                                            <div class="bar"></div>
                                            <div class="label"></div>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="password2" class="d-block">Gereja</label>
                                        <select class="form-control" wire:model="churchId">
                                            <option value="" selected disabled>Pilih Gereja</option>
                                            @foreach ($churches as $church)
                                                <option value="{{ $church->id }}">{{ $church->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="password2" class="d-block">Edukasi</label>
                                        <select class="form-control" wire:model="educationId">
                                            <option value="" selected disabled>Pilih Edukasi</option>
                                            @foreach ($educations as $edu)
                                                <option value="{{ $edu->id }}">{{ $edu->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="password2" class="d-block">Bidang Minat</label>
                                        <select class="form-control" wire:model="interestId">
                                            <option value="" selected disabled>Pilih Bidang Minat</option>
                                            @foreach ($interests as $interest)
                                                <option value="{{ $interest->id }}">{{ $interest->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                                        Register
                                    </button>
                                </div>
                                <div class="col-md">
                                    <p style="text-align: center;">Sudah punya akun?
                                        <a href="{{ route('member.login') }}">Masuk</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="simple-footer">
                        Copyright &copy; PIKI 2023
                    </div>
                </div>
            </div>
    </section>
</div>
