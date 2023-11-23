<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Input Visi Misi</h4>
            </div>
            <form class="card-body" wire:submit="save">
                <div class="form-group">
                    <label>Pertama</label>
                    <textarea class="summernote" data-model="visi1">{!! $visi1 !!}</textarea>
                </div>
                <div class="form-group">
                    <label>Kedua</label>
                    <textarea class="summernote" data-model="visi2">{!! $visi2 !!}</textarea>
                </div>
                <div class="form-group">
                    <label>Ketiga</label>
                    <textarea class="summernote" data-model="visi3">{!! $visi3 !!}</textarea>
                </div>
                <div class="form-group">
                    <label>Keempat</label>
                    <textarea class="summernote" data-model="visi4">{!! $visi4 !!}</textarea>
                </div>
                <div class="form-group">
                    <label>Kelima</label>
                    <textarea class="summernote" data-model="visi5">{!! $visi5 !!}</textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        function initSummernote() {
            $('.summernote').each(function(i) {
                let model = $(this).data('model');
                $(this).summernote({
                    callbacks: {
                        onChange: debounce(function(contents, $editable) {
                            @this.set(model, contents)
                        }, 1000)
                    },
                    height: 300,
                })

            })
        }

        document.addEventListener("DOMContentLoaded", () => {
            initSummernote()

            Livewire.on('summernote-reinit', () => {
                $(".summernote").each(function() {
                    $(this).summernote('destroy');
                })
                setTimeout(() => {
                    initSummernote()
                }, 200);
            })
        })
    </script>
</div>
