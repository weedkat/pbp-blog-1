<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand font-weight-bold" href="#">PBP BLOG (Penulis)</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active mr-4">
                    <a class="nav-link" href="/penulis">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mr-4">
                    <a class="nav-link" href="/post/data">Post</a>
                </li>
                <li class="nav-item mr-4">
                    <a class="nav-link" href="/komentar">Komentar</a>
                </li>
                <li class="nav-item dropdown mr-4">
                    <a class="nav-link dropdown-toggle" href="#" id="profile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Profile
                    </a>
                    <div class="dropdown-menu" aria-labelledby="profile">
                        <a class="dropdown-item" href="/penulis/edit/<?= session()->get('idpenulis') ?>">Edit Profile</a>
                        <a class="dropdown-item" href="/penulis/ubahpassword/<?= session()->get('idpenulis') ?>">Ubah Password</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/authpenulis/logout"><i class="fa fa-sign-out-alt mr-2"></i>Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>