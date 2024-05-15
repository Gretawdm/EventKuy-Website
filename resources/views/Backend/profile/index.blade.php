 <h1 class="h3 mb-2 text-gray-800" style="font-size: 25px">Profile</h1>
<div class="card mb-3">
    <div class="card-body pt-1">
        <!-- Bordered Tabs -->
        <ul class="nav nav-tabs nav-tabs-bordered">
            <li>
                <a href="/profile" class="nav-link {{ Request::is('profile') ? 'active' : '' }}" style="font-weight: 800">
                    Data Profile
                </a>
            </li>
            <li>
                <a href="/edit_profile" class="nav-link {{ Request::is('edit_profile') ? 'active' : '' }}"
                    style="font-weight: 800">
                    Edit Profile
                </a>
            </li>
            <li>
                <a href="/ubah_password" class="nav-link {{ Request::is('ubah_password') ? 'active' : '' }}"
                    style="font-weight: 800">
                    Ubah Password
                </a>
            </li>
        </ul>
    </div>
</div>
<style>
    .nav-tabs-bordered {
        border-bottom: none;

    }

    .nav-tabs-bordered .nav-link {
        margin-bottom: -2px;
        border: none;
        background-color: #fff;
        color: black;
        align-items: center;
        justify-content: center;
        margin-top: 0;

        position: relative;
        /* Tambahkan posisi relatif untuk menempatkan garis di bawah */
    }

    .nav-tabs-bordered .nav-link:after {
        content: '';
        /* Tambahkan elemen after untuk garis */
        position: absolute;
        /* Jadikan posisi absolut */
        bottom: 0;
        /* Letakkan di bagian bawah */
        left: 0;
        /* Mulai dari kiri */
        width: 100%;
        /* Panjangkan sesuai lebar */
        height: 2px;
        /* Tentukan ketebalan garis */
        background-color: transparent;
        /* Mulai dengan transparan */
        transition: background-color 0.3s;
        /* Animasikan perubahan warna */
    }

    .nav-tabs-bordered .nav-link:hover:after,
    .nav-tabs-bordered .nav-link:focus:after,
    .nav-tabs-bordered .nav-link.active:after {
        background-color: #7e4a9e;
        /* Warna garis saat tab dihover atau aktif */
    }

    .nav-tabs-bordered .nav-link.active:after {
        height: 2px;
        /* Tinggikan garis pada tab aktif */
    }

    .nav-tabs-bordered .nav-link.active {
        background-color: #fff;
        color: #7e4a9e;
    }
</style>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        const navLinks = document.querySelectorAll('.nav-link');

        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                // Hapus kelas 'active' dari semua nav-link
                navLinks.forEach(navLink => {
                    navLink.classList.remove('active');
                });

                // Tambahkan kelas 'active' ke nav-link yang diklik
                this.classList.add('active');
            });
        });
    });
</script>
