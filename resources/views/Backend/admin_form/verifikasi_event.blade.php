@extends('backend.app')
@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Verifikasi Event</h1>
        <div class="row">
            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-bottom-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-primary" style="font-weight: 800; font-size:20px">
                                    Pendaftar Event Bulan Ini</div>
                                <div class="h5 mb-0" style="font-weight: 700">23</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-solid fa-layer-group fa-2x "></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- belum verifikasi Card  -->
            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-bottom-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-warning " style="font-weight: 800; font-size:20px">
                                    Belum Terverifikasi</div>
                                <div class="h5 mb-0" style="font-weight: 700">10</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x "></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Content Row -->

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0  text-purple">Data Pendaftar Event</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-advance table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama Event</th>
                                <th>Nama Penyelenggara</th>
                                <th>Alamat Event</th>
                                <th>Kategori Event</th>
                                <th>Tanggal Event</th>
                                <th>KTP</th>
                                <th>Status Verifikasi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($detail_event as $item)
                                @php
                                    $tanggal_event = strtotime($item->tanggal_event);
                                    $today = strtotime(date('Y-m-d'));
                                    $class = $tanggal_event < $today ? 'expired-event' : '';

                                    if ($item->status_verifikasi === 'waiting') {
                                        $class .= ' waiting-event';
                                    }
                                @endphp
                                <tr class="{{ $class }}">
                                    <td class="align-middle">{{ $item->nama_event }}</td>
                                    <td class="align-middle">{{ $item->penyelenggara_event }}</td>
                                    <td class="align-middle">{{ $item->alamat }}</td>
                                    <td class="align-middle">{{ $item->kategori_event }}</td>
                                    <td class="align-middle">{{ $item->tanggal_event }}</td>
                                    <td class="align-middle"><img src="{{ asset("ktp_event/$item->upload_ktp") }}"
                                            alt="KTP" style="width: 100px; height: auto;"></td>
                                    <td class="align-middle">{{ $item->status }}</td>
                                    <td class="align-middle">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a style="font-weight: 800;"
                                                href="{{ route('detail_event.show', $item->id_event) }}" type="button"
                                                class="btn btn-warning">Detail</a>
                                            <form action="{{ route('verifikasi_event.verify', $item->id_event) }}"
                                                method="POST" type="button" class="btn btn-success p-0"
                                                onsubmit="return confirm('Setujui Event Ini?')">
                                                @csrf
                                                <button style="font-weight: 800" class="btn btn-success m-0">Setuju</button>
                                            </form>
                                            <form action="{{ route('verifikasi_event.unverify', $item->id_event) }}"
                                                method="POST" type="button" class="btn btn-danger p-0"
                                                onsubmit="return confirm('Tolak Event Ini?')">
                                                @csrf
                                                <button style="font-weight: 800" class="btn btn-danger m-0">Tolak</button>
                                            </form>
                                            <form action="{{ route('verifikasi_event.destroy', $item->id_event) }}"
                                                method="POST" class="btn btn-secondary p-0"
                                                onsubmit="return confirm('Apakah anda yakin ingin menghapus event ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button style="font-weight: 800" class="btn btn-secondary m-0">
                                                    <i class="fas fa-trash ml-2"></i>
                                                </button>
                                            </form>

                                        </div>
                                    </td>

                                </tr>
                            @endforeach





                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Di dalam dropdown menu -->
    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
        <!-- Kontainer untuk notifikasi -->
        <div id="notificationContainer">
            <!-- Notifikasi akan ditambahkan di sini -->
        </div>
    </div>

    <div class="modal fade" id="notificationModal" tabindex="-1" role="dialog" aria-labelledby="notificationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="notificationModalLabel">Detail Notifikasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Konten notifikasi akan ditampilkan di sini -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>


    <style>
        .event-name {
            font-weight: bold;
        }

        .event-description {
            font-weight: lighter;
        }

        #notificationContainer .dropdown-item:last-child {
            border-top: 1px solid #dee2e6;
            top: -2px;
            padding-top: 10px;
        }

        .unread-notification {
            background-color: #606881;
            /* Warna latar belakang untuk notifikasi yang belum dibaca */
        }
    </style>


    <!-- JavaScript untuk menambahkan notifikasi -->
    <script>
        // Fungsi untuk menambahkan notifikasi baru ke dalam dropdown
        function addNotification(eventName, eventDescription, eventDate, isRead) {
            // Tentukan kelas CSS untuk notifikasi berdasarkan status pembacaan
            var notificationClass = isRead ? '' : 'unread-notification';

            // Buat objek Date untuk tanggal dan waktu saat ini
            var currentDate = new Date();
            var currentDateString = currentDate.toLocaleDateString('en-US', {
                day: 'numeric',
                month: 'short',
                year: 'numeric'
            });
            var currentTimeString = currentDate.toLocaleTimeString('en-US', {
                hour: '2-digit',
                minute: '2-digit'
            });

            // Format tanggal notifikasi
            var notificationDate = new Date(eventDate).toLocaleDateString('en-US', {
                day: 'numeric',
                month: 'short',
                year: 'numeric'
            });

            // Buat pesan notifikasi baru dengan kelas CSS yang sesuai
            var newNotification = `
        <a class="dropdown-item d-flex align-items-center notification-item ${notificationClass}" href="#" data-toggle="modal" data-target="#notificationModal">
            <div class="mr-3">
                <div class="icon-circle bg-primary">
                    <i class="fas fa-file-alt text-white"></i>
                </div>
            </div>
            <div>
                <div class="small text-gray-500 event-name">${eventName}</div>
                <div class="font-weight-bold event-description ${isRead ? 'text-gray-600' : ''}">${eventDescription}</div>
                <div class="small text-gray-500">Sent: ${currentDateString} ${currentTimeString}</div>
                <div class="small text-gray-500">Event Date: ${notificationDate}</div>
            </div>
        </a>
    `;

            // Tambahkan pesan notifikasi baru ke dalam kontainer notifikasi
            var notificationContainer = document.getElementById('notificationContainer');
            notificationContainer.insertAdjacentHTML('beforeend', newNotification);

            // Perbarui jumlah notifikasi
            var notificationCounter = document.getElementById('notificationCounter');
            var currentCount = parseInt(notificationCounter.innerText);
            if (currentCount + 1 > 3) {
                notificationCounter.innerHTML = '3<span class="badge badge-danger badge-counter">+</span>';
                document.getElementById('showAllAlerts').style.display = 'block';
            } else {
                notificationCounter.innerText = currentCount + 1;
            }
        }

        // Panggil fungsi addNotification untuk setiap event dari $detailevent
        @foreach ($detail_event as $event)
            addNotification("{{ $event->nama_event }}", "{{ $event->deskripsi_event }}", "{{ $event->tanggal_event }}",
                {{ $event->is_read ? 'true' : 'false' }});
        @endforeach



        // Event listener untuk notifikasi yang diklik
        document.querySelectorAll('.notification-item').forEach(item => {
            item.addEventListener('click', event => {
                // Hapus kelas unread-notification dari notifikasi yang dibuka
                item.classList.remove('unread-notification');

                // Ambil judul dan deskripsi notifikasi
                var eventName = item.querySelector('.event-name').innerText;
                var eventDescription = item.querySelector('.event-description').innerText;

                // Tampilkan modal dengan detail notifikasi
                var modalTitle = document.getElementById('notificationModalLabel');
                var modalBody = document.querySelector('.modal-body');
                modalTitle.innerText = eventName;
                modalBody.innerHTML = eventDescription;
            });
        });

        function markNotificationAsRead(notificationItem) {
            // Hapus kelas unread-notification dari notifikasi
            notificationItem.classList.remove('unread-notification');
            // Update tampilan notifikasi yang belum dibaca
            var unreadNotifications = document.querySelectorAll('.unread-notification');
            var notificationCounter = document.getElementById('notificationCounter');
            var currentCount = parseInt(notificationCounter.innerText);

            // Kurangi jumlah notifikasi yang belum dibaca
            if (unreadNotifications.length < currentCount) {
                var newCount = currentCount - 1;
                notificationCounter.innerText = newCount;
                notificationCounter.innerHTML = newCount > 3 ? '3<span class="badge badge-danger badge-counter">+</span>' :
                    newCount;
            }
        }

        // Event listener untuk notifikasi yang diklik
        document.querySelectorAll('.notification-item').forEach(item => {
            item.addEventListener('click', event => {
                // Cek apakah notifikasi belum dibaca
                if (item.classList.contains('unread-notification')) {
                    // Tandai notifikasi sebagai sudah dibaca
                    markNotificationAsRead(item);
                }

                // Ambil judul dan deskripsi notifikasi
                var eventName = item.querySelector('.event-name').innerText;
                var eventDescription = item.querySelector('.event-description').innerText;

                // Tampilkan modal dengan detail notifikasi
                var modalTitle = document.getElementById('notificationModalLabel');
                var modalBody = document.querySelector('.modal-body');
                modalTitle.innerText = eventName;
                modalBody.innerHTML = eventDescription;
            });
        });


        // Fungsi untuk menampilkan semua notifikasi
        function showAllAlerts() {
            // Tampilkan semua notifikasi
            var notifications = document.querySelectorAll('.dropdown-item');
            notifications.forEach(function(notification) {
                notification.style.display = 'block';
            });

            // Sembunyikan tombol "Show All Alerts"
            document.getElementById('showAllAlerts').style.display = 'none';
        }

        // Panggil fungsi addNotification untuk setiap event dari $detailevent
        @foreach ($detail_event as $event)
            addNotification("{{ $event->nama_event }}", "{{ $event->deskripsi_event }}",
                {{ $event->is_read ? 'true' : 'false' }});
        @endforeach

        // Tambahkan event listener untuk tombol "Show All Alerts"
        document.getElementById('showAllAlerts').addEventListener('click', function(event) {
            event.preventDefault();
            showAllAlerts();
        });
    </script>





    <!-- /.container-fluid -->

    <!-- Tambahkan script JavaScript di bagian bawah halaman Anda -->
@endsection
