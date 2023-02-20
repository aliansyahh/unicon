<section class="ticket-section section-padding">
    <div class="section-overlay"></div>

    <div class="container">
        <div class="row">

            <div class="col-lg-7 col-10 mx-auto">
                <div class="custom-form ticket-form mb-5 mb-lg-0">
                    <div class="modal-body text-start text-black p-4">
                        <h5 class="modal-title text-uppercase mb-5" id="exampleModalLabel">{{ $order->nama_awal }}
                            {{ $order->nama_belakang }}</h5>
                        <h4 class="mb-5" style="color: #35558a;">Periksa Kembali Pembelian Anda!</h4>
                        <p class="mb-0" style="color: #35558a;">Detail Pembelian</p>
                        <hr class="mt-2 mb-4"
                            style="height: 0; background-color: transparent; opacity: .75; border-top: 2px dashed #9e9e9e;">

                        <div class="d-flex justify-content-between">
                            <p class="fw-bold mb-0">TIKET KALSEL UNITE (Jumlah : {{ $order->qty }})</p>
                            <p class="text-muted mb-0">Rp. {{ $order->gross_amount }}</p>
                        </div>
                        <hr
                            style="height: 0; background-color: transparent; opacity: .75; border-top: 2px dashed #9e9e9e;">

                        <div class="d-flex justify-content-between">
                            <p class="small mb-0">Harga Satuan</p>
                            <p class="small mb-0">Rp. 30.000</p>
                        </div>

                        <div class="d-flex justify-content-between pb-1">
                            <p class="small">Harga Satuan x Jumlah tiket</p>
                            <p class="small">Rp. {{ $order->gross_amount }}</p>
                        </div>

                        <div class="d-flex justify-content-between">
                            <p class="fw-bold">Total</p>
                            <p class="fw-bold" style="color: #35558a;">Rp. {{ $order->gross_amount }}</p>
                        </div>

                    </div>
                    <div class="modal-footer d-flex justify-content-center border-top-0 py-4">
                        <button type="button" id='pay-button' class="btn btn-primary btn-lg mb-1"
                            style="background-color: #35558a;">
                            Bayar Boss
                        </button>
                    </div>
                    <form action="" id="submit_form" method="post">
                        @csrf
                        <input type="hidden" name="json" id="json_callback">
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>
