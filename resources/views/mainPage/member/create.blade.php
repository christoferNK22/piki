@extends('layoutsAdmin.app')
@section('title', 'Tambah Member')
@section('content')

    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Input Text</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Default Input Text</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-phone"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control phone-number">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Password Strength</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </div>
                            </div>
                            <input type="password" class="form-control pwstrength" data-indicator="pwindicator">
                        </div>
                        <div id="pwindicator" class="pwindicator">
                            <div class="bar"></div>
                            <div class="label"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Currency</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    $
                                </div>
                            </div>
                            <input type="text" class="form-control currency">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Purchase Code</label>
                        <input type="text" class="form-control purchase-code" placeholder="ASDF-GHIJ-KLMN-OPQR">
                    </div>
                    <div class="form-group">
                        <label>Invoice</label>
                        <input type="text" class="form-control invoice-input">
                    </div>
                    <div class="form-group">
                        <label>Date</label>
                        <input type="text" class="form-control datemask" placeholder="YYYY/MM/DD">
                    </div>
                    <div class="form-group">
                        <label>Credit Card</label>
                        <input type="text" class="form-control creditcard">
                    </div>
                    <div class="form-group">
                        <label>Tags</label>
                        <input type="text" class="form-control inputtags">
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Toggle Switches</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <div class="control-label">Toggle switches</div>
                        <div class="custom-switches-stacked mt-2">
                            <label class="custom-switch">
                                <input type="radio" name="option" value="1" class="custom-switch-input" checked>
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">Option 1</span>
                            </label>
                            <label class="custom-switch">
                                <input type="radio" name="option" value="2" class="custom-switch-input">
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">Option 2</span>
                            </label>
                            <label class="custom-switch">
                                <input type="radio" name="option" value="3" class="custom-switch-input">
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">Option 3</span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="control-label">Toggle switch single</div>
                        <label class="custom-switch mt-2">
                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
                            <span class="custom-switch-indicator"></span>
                            <span class="custom-switch-description">I agree with terms and conditions</span>
                        </label>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
