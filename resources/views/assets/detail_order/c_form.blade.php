<section class="ticket-section section-padding">
    <div class="section-overlay"></div>

    <div class="container">
        <div class="row">

            <div class="col-lg-10 col-10 mx-auto">
                <div class="custom-form ticket-form mb-5 mb-lg-0">

                    {{-- <table>
                        <tr>
                            <th>Diterbitkan Atasa Nama</th>
                            <th> : UNICON KALSEL</th>
                        </tr>
                    </table> --}}
                    <div class="row">
                        {{-- <div class="col-md">
                            <table>
                                <tr>
                                    <td> <p><strong>Diterbitkan Atas nama</strong></p></td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><strong>Penjual</strong></p>
                                    </td>
                                    <td><p><strong> : UNICON KALSEL</strong></p></td>
                                    
                                </tr>
                            </table>

                        </div> --}}
                        <div class="col-md-7">
                            <table class="text-white" >
                       
                                
                                <tr>
                                    <td><p><strong>Pembeli</strong></td>
                                    <td><p><strong> &nbsp; &nbsp; : {{ $order->nama_awal }}
                                        {{ $order->nama_belakang }}</strong> </p></td>
                                </tr>
                               <tr>
                                <td><p><strong>Email</strong></p></td>
                                <td><p><strong> &nbsp;&nbsp; : {{ $order->email }}</strong></p></td>
                               </tr>
                               <tr>
                                <td><p><strong>Nomor Hp</strong></p></td>
                                <td><p><strong> &nbsp;&nbsp;  : {{ $order->nomor_hp }}</strong></p></td>
                               </tr>
                               <tr>
                                <td><p><strong>Jumlah Tiket</strong></td>
                                <td><p><strong> &nbsp;&nbsp; : {{ $order->qty }} Tiket
                                    </strong> </p></td>
                            </tr>    
                        </table>
                                 
                        </div>

                    </div>
                    <div class="row my-4">
                        <table class="table">
                            <tr>
                                <thead>
                                    <th>Info</th>
                                    <th>Jumlah</th>
                                    <th>Satuan</th>
                                    <th>Total </th>
                                </thead>
                            </tr>
                            <tr>
                                <tbody>
                                    <td>TIKET KALSEL UNITE</td>
                                    <td>{{ $order->qty }}</td>
                                    <td>35.000</td>
                                    <td>35.000</td>
                                </tbody>
                            </tr>
                            <tr>
                                <thead>
                                    <th colspan="2">Total Keseluruhan</th>
                                    <th></th>
                                    <th>35.000</th>
                                </thead>
                            </tr>
                        </table>
                        <button type="submit" id='pay-button'>Bayar Boss</button>

                        <form action='{{url("/detail-order/$order->id")}}' id="submit_form" method="post">
                            @csrf
                            <input type="hidden" name="json" id="json_callback">
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>
