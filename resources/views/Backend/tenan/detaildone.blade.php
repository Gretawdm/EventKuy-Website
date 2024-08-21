<div class="modal fade" id="detailDoneModal{{ $order->id_order }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header"
                style="background-color: #512e60 !important; color:white; font-weight:900; height:50px">
                <h5 class="modal-title" style="font-size: 16px; font-weight:800">
                    Detail order</h5>
                <button type="button" class="close" style="font-size: 18px; color:white" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-sm-8 col-form-label">Nama Perusahaan :</div>
                    <div class="col-sm-10">
                        {{ $order['user']['nama_perusahaan'] }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-8 col-form-label">Nama Lengkap :</div>
                    <div class="col-sm-10">
                        {{ $order['user']['nama_lengkap'] }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-8 col-form-label">Alamat Event :</div>
                    <div class="col-sm-10">
                        {{ $order['user']['alamat_perusahaan'] }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-8 col-form-label">Tanggal Order :</div>
                    <div class="col-sm-10">
                        {{ $order->tgl_order }}
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-8 col-form-label">Tanggal Diterima :</div>
                    <div class="col-sm-10">
                        {{ $order->tgl_diterima }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-8 col-form-label">Tanggal Bayar :</div>
                    <div class="col-sm-10">
                        {{ $order->tgl_bayar }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-8 col-form-label">Tanggal Verifikasi :</div>
                    <div class="col-sm-10">
                        {{ $order->tgl_verifikasi }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-8 col-form-label">Harga Bayar :</div>
                    <div class="col-sm-10">
                        Rp {{ number_format($order['booth']['harga_booth'], 0, ',', '.') }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-8 col-form-label">Bukti Pembayaran :</div>
                    <div class="col-sm-10">
                        @if ($order->img_bukti_transfer)
                            <img src="{{ asset($order->img_bukti_transfer) }}" alt="Bukti Transfer"
                                style="max-width: 100px;" />
                        @else
                            <p>Gambar tidak tersedia</p>
                        @endif
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-8 col-form-label">Deskripsi :</div>
                    <div class="col-sm-10">
                        {{ $order['user']['deskripsi_perusahaan'] }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-8 col-form-label">Status Verifikasi :</div>
                    <div class="col-sm-10">
                        {{ $order->status_order }}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
