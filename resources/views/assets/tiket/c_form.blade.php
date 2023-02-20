<section class="ticket-section section-padding">
    <div class="section-overlay"></div>

    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-10 mx-auto">
                <form class="custom-form ticket-form mb-5 mb-lg-0" action="{{route('tiket')}}" method="post" role="form">
                    @csrf

                    <h2 class="text-center mb-4">Order Tiket</h2>

                    <div class="ticket-form-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <input type="text" name="nama_awal" class="form-control 
                                @error('nama_awal')
                                  is-invalid
                                @enderror" placeholder="Nama Depan" value="{{old('nama_awal')}}">
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <input type="text" name="nama_belakang" class="form-control
                                @error('nama_belakang')
                                  is-invalid
                                @enderror" placeholder="Nama Belakang" value="{{old('nama_belakang')}}">
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <input type="text" name="tmpt_lahir" id="tmpt_lahir" class="form-control @error('tmpt_lahir')
                                  is-invalid
                                @enderror" placeholder="Tempat Lahir" value="{{old('tmpt_lahir')}}">
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control  @error('tgl_lahir')
                                  is-invalid
                                @enderror" placeholder="" value="{{old('tgl_lahir')}}">
                            </div>
                        </div>
                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control @error('email')
                                  is-invalid
                                @enderror" placeholder="Email" value="{{old('email')}}">

                        <input type="number" class="form-control @error('nomor_hp')
                                  is-invalid
                                @enderror" name="nomor_hp" placeholder="No Telepon (eg. 082134567890)" value="{{old('nomor_hp')}}">

                        <input type="number" class="form-control @error('qty')
                                  is-invalid
                                @enderror" name="qty" placeholder="qty" min="1" max="10" value="{{old('qty')}}">

                        <textarea name="alamat" rows="3" class="form-control @error('alamat')
                                  is-invalid
                                @enderror" id="alamat" placeholder="Alamat Lengkap"></textarea>

                        <div class="col-lg-4 col-md-10 col-8 mx-auto">

                            <button type="submit" class="form-control">Beli Tiket</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</section>