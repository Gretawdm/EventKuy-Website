<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
<form action="{{ route('booth.detail', ['eventId' => $order->id_order]) }}" method="POST" enctype="multipart/form-data">
    <div class="modal fade" id="#detailBooth" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-fade-transform" role="dialog">
            <div class="modal-content">
                <div class="modal-header"
                    style="background-color: #512e60 !important; color:white; font-weight:900; height:50px">
                    <h5 class="modal-title" style="font-size: 16px; font-weight:800">Edit Event</h5>
                    <button type="button" class="close" style="font-size: 18px; color:white" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <h5 class="nama_perusahaan" style="font-size:15px; font-weight:600;">
                        {{ $order['nama_perusahaan'] }}
                    </h5>
                    <h5 class="nama_lengkap" style="font-size:15px; font-weight:600;">{{ $order['nama_lengkap'] }}</h5>
                    <h5 class="deskripsi" style="font-size:15px; font-weight:600;">{{ $order['deskripsi_perusahaan'] }}
                    </h5>
                    <h5 class="lokasi" style="font-size:15px; font-weight:600;">{{ $order['alamat_perusahaan'] }}</h5>
                    <h5 class="booth" style="font-size:15px; font-weight:600;">{{ $order['tipe_booth'] }}</h5>
                    <h5 class="no_booth" style="font-size:15px; font-weight:600;">{{ $order['nomor_booth'] }}</h5>
                    <h5 class="tanggal_pesan" style="font-size:15px; font-weight:600;">{{ $order['tgl_order'] }}</h5>
                </div>
            </div>
        </div>
    </div>
</form>
