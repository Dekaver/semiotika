<x-app-layout>
    @section('content')
    <x-card header='Semiotika'>
        <x-form action="{{route('semiotika.store')}}" method="POST" enctype="multipart/form-data">

            <textarea class="form-control" id="summary-ckeditor" name="tentang"></textarea> 
            <div class="form-row">
                <div class="form-group col">
                    <label class="form-label">Tanggal</label>
                    <input name="tanggal" type="date" min="2021/01/01" class="form-control" placeholder="Username" required>
                    <div class="clearfix"></div>
                </div>
                <div class="form-group col">
                    <label class="form-label">Waktu</label>
                    <input name="waktu" type="time" class="form-control" placeholder="Username" required>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" id="deskripsi" cols="30" rows="10"></textarea>
                <div class="clearfix"></div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-10">
                    <label class="form-label">link</label>
                    <input name="link" type="text" class="form-control" name="link" placeholder="https://bit.ly" required>
                    <div class="clearfix"></div>
                </div>
                <div class="form-group col-md-2">
                    <label class="form-label">periode</label>
                    <input name="periode" type="number" min="2021" max="2050" class="form-control" name="periode" placeholder="2025" required>
                    <div class="clearfix"></div>
                </div>
            </div>  
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label class="form-label">Alamat Lokasi</label>
                    <input name="alamat" type="text" class="form-control" placeholder="jl.... kelurahan, kecamatan, kabupaten" required>
                    <div class="clearfix"></div>
                </div>
                <div class="form-group col-md-4">
                    <label class="form-label">Alamat GPS</label>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input name="longitude" type="number" class="form-control" placeholder="Longitude" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input name="latitude" type="number" class="form-control" placeholder="Latitude" required>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <x-button class="form-control" type="submit">SAVE</x-button>
        </x-form>
    </x-card>
    <script src="{{ asset('/storage/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'summary-ckeditor' );
    </script> 
    
    @endsection
</x-app-layout>
