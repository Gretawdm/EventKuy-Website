<div class="modal fade" id="detailOrderModal{{ $order->id_order }}" tabindex="-1" role="dialog"
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
                    <div class="col-sm-8 col-form-label">Tipe Booth :</div>
                    <div class="col-sm-10">
                        {{ $order['booth']['tipe_booth'] }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-8 col-form-label">Nomor Booth :</div>
                    <div class="col-sm-10">
                        {{ $order->nomor_booth }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-8 col-form-label">Harga Booth :</div>
                    <div class="col-sm-10">
                        Rp {{ number_format($order['booth']['harga_booth'], 0, ',', '.') }}
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-8 col-form-label">Tanggal Order :</div>
                    <div class="col-sm-10">
                        {{ $order->tgl_order }}
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


