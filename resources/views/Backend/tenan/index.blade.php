<div class="row">
    <div class="col-xl-2 col-md-6 mb-4">
        <a href="/tenant/semua" class="card border-bottom-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs text-primary text-uppercase mb-1" style="font-weight: 900;">
                            Semua
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            0
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-solid fa-layer-group fa-2x text-primary"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-xl-2 col-md-6 mb-4">
        <a href="/tenant/diterima" class="card border-bottom-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs text-info text-uppercase mb-1" style="font-weight: 900;">
                            Diterima
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            0
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-check-circle fa-2x text-info"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-xl-2 col-md-6 mb-4">
        <a href="/tenant/ditolak" class="card border-bottom-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs text-danger text-uppercase mb-1" style="font-weight: 900;">
                            Ditolak
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            0
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-times-circle fa-2x text-danger"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <a href="/tenant/menunggu_pembayaran" class="card border-bottom-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs text-warning text-uppercase mb-1" style="font-weight: 900;">
                            Menunggu Pembayaran
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            0
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-hourglass-half fa-2x text-warning"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>


    <div class="col-xl-3 col-md-6 mb-4">
        <a href="/tenant/terverifikasi" class="card border-bottom-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs text-success text-uppercase mb-1" style="font-weight: 900;">
                            Terverifikasi
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            0
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-thumbs-up fa-2x text-success"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>

</div>


<style>
.text-gray-300 {
    color: #dddfeb !important
}

.text-xs {
    font-size: .9rem
}
</style>

<script src="{{ asset('backend/assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('backend/assets/js/sb-admin-2.min.js') }}"></script>

<!-- Page level plugins -->
<script src="{{ asset('backend/assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('backend/assets/js/demo/datatables-demo.js') }}"></script>