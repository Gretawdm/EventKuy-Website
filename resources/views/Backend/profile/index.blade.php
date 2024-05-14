<div class="card">
    <div class="card-body pt-3">
        <!-- Bordered Tabs -->
        <ul class="nav nav-tabs nav-tabs-bordered">
            <li><a href="/profile" class="nav-link active" style="font-weight: 900">Data Profile</a></li>
            <li><a href="/edit_profile" class="nav-link" style="font-weight: 900">Edit Profile</a></li>
            <li><a href="/ubah_password" class="nav-link" style="font-weight: 900">Ubah Password</a></li>

        </ul>
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