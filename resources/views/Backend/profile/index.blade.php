@extends('backend.app')
@section('content')
<div class="card">
    <div class="card-body pt-3">
        <!-- Bordered Tabs -->
        <ul class="nav nav-tabs nav-tabs-bordered">

            <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Data
                    Profile</button>
            </li>

            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Ubah Profile</button>
            </li>

            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Ubah
                    Password</button>
            </li>

        </ul>
        <div class="tab-content pt-2">

            <div class="tab-pane fade show active profile-overview" id="profile-overview" style="width: 76vw;">

                <h5 class="card-title">Profile Details</h5>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Nama Perusahaan</div>
                    <div class="col-lg-9 col-md-8">Kevin Anderson</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Alamat</div>
                    <div class="col-lg-9 col-md-8">Lueilwitz, Wisoky and Leuschke</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">No Telepon</div>
                    <div class="col-lg-9 col-md-8">Web Designer</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8">USA</div>
                </div>

            </div>

            <div class="tab-pane fade profile-edit pt-3" id="profile-edit" style="width: 76vw;">

                <!-- Profile Edit Form -->
                <form>

                    <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Perusahaan</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="fullName" type="text" class="form-control" id="fullName"
                                value="Kevin Anderson">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="Address" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="address" type="text" class="form-control" id="Address"
                                value="A108 Adam Street, New York, NY 535022">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="Phone" class="col-md-4 col-lg-3 col-form-label">No Telepon</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="phone" type="text" class="form-control" id="Phone"
                                value="(436) 486-3538 x29071">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="email" type="email" class="form-control" id="Email"
                                value="k.anderson@example.com">
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form><!-- End Profile Edit Form -->

            </div>

            <div class="tab-pane fade pt-3" id="profile-change-password" style="width: 76vw;">
                <!-- Change Password Form -->
                <form>

                    <div class="row mb-3">
                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="password" type="password" class="form-control" id="currentPassword">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="newpassword" type="password" class="form-control" id="newPassword">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New
                            Password</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                </form><!-- End Change Password Form -->

            </div>

        </div><!-- End Bordered Tabs -->

    </div>
</div>
<style>
.nav-tabs-bordered {
    border-bottom: 2px solid #ebeef4;
}

.nav-tabs-bordered .nav-link {
    margin-bottom: -2px;
    border: none;
    background-color: #fff;
    color: black;
}

.nav-tabs-bordered .nav-link:hover,
.nav-tabs-bordered .nav-link:focus {
    background-color: #fff;
    color: #C54C82;
    border-bottom: 2px solid #C54C82;
}

.nav-tabs-bordered .nav-link.active {
    background-color: #fff;
    color: #C54C82;
    border-bottom: 2px solid #C54C82;
}

.profile .profile-card img {
    max-width: 120px;
}

.profile .profile-card h2 {
    font-size: 24px;
    font-weight: 700;
    color: #2c384e;
    margin: 10px 0 0 0;
}

.profile .profile-card h3 {
    font-size: 18px;
}

.profile .profile-card .social-links a {
    font-size: 20px;
    display: inline-block;
    color: rgba(1, 41, 112, 0.5);
    line-height: 0;
    margin-right: 10px;
    transition: 0.3s;
}

.profile .profile-card .social-links a:hover {
    color: #012970;
}

.profile .profile-overview .row {
    margin-bottom: 20px;
    font-size: 15px;
}

.profile .profile-overview .card-title {
    color: #012970;
}

.profile .profile-overview .label {
    font-weight: 600;
    color: rgba(1, 41, 112, 0.6);
}

.profile .profile-edit label {
    font-weight: 600;
    color: rgba(1, 41, 112, 0.6);
}

.profile .profile-edit img {
    max-width: 120px;
}
</style>
<script>
// Ambil semua elemen tab
const tabs = document.querySelectorAll('[data-bs-toggle="tab"]');

// Saat tab diklik
tabs.forEach(tab => {
    tab.addEventListener('click', (event) => {
        event.preventDefault(); // Mencegah perilaku default

        // Ambil target tab-pane dari data-bs-target
        const target = document.querySelector(event.target.getAttribute('data-bs-target'));

        if (target) {
            // Hapus kelas 'show active' dari semua tab-pane
            document.querySelectorAll('.tab-pane').forEach(tabPane => {
                tabPane.classList.remove('show', 'active');
            });

            // Hapus kelas 'active' dari semua nav-link
            document.querySelectorAll('.nav-link').forEach(navLink => {
                navLink.classList.remove('active');
            });

            // Tambahkan kembali kelas 'show active' ke target tab-pane
            target.classList.add('show', 'active');

            // Tambahkan kelas 'active' ke tab yang baru saja diklik
            event.target.classList.add('active');
        }
    });
});
</script>
@endsection