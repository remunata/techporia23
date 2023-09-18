<?= $this->extend('layout/master_layout'); ?>

<?= $this->section('title'); ?> Networking Competition | Technology Euhporia
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="main">
    <div class="section" style="padding-top: 3rem;">
        <div class="detail-horizontal">
            <div class="image onscroll-r">
                <img src="/assets/images/competition-logo/netcomp.webp" alt="Networking Competition" />
            </div>
            <div class="keterangan onscroll-r" style="--delay: 1;">
                <h1>Networking Competition</h1>
                <div class="paragraphs">
                    <p>
                        Kompetisi Networking Capture the Flag merupakan salah satu cabang kompetisi baru dalam event
                        Technology Euphoria, sebuah acara bertaraf nasional yang diadakan untuk mahasiswa aktif
                        perguruan tinggi dan siswa sma/smk sederajat di indonesia. Tema yang diusung untuk kompetisi
                        Networking Capture the Flag kali ini adalah “the New Era Eechnology of Capture the Flag in
                        Industry”.
                    </p>
                    <p>
                        Tujuan utama dari kompetisi ini adalah menguji kemampuan dan pengetahuan peserta dalam bidang
                        web hacking, cryptography, digital forensic, reverse engineering, dan binary exploitation. Fokus
                        utama perlombaan ini didasarkan kepada ketepatan dan kecepatan peserta dalam mencari flag yang
                        sudah disembunyikan dalam sistem. Kompetisi akan dibagi dalam 2 babak, yaitu babak penyisihan
                        yang dilakukan secara online melalui zoom meeting dan babak final secara hybrid di Fakultas Ilmu
                        Komputer Universitas Sriwijaya dan Zoom Meeting.
                    </p>
                </div>
                <table class="details-table">
                    <tr>
                        <td><i class='bx bx-group'></i> Pendaftaran Peserta</td>
                        <td>21 Agustus - 25 September 2023</td>
                    </tr>
                    <tr>
                        <td><i class='bx bx-wrench'></i> Technical Meeting</td>
                        <td>27 September 2023</td>
                    </tr>
                    <tr>
                        <td><i class='bx bx-calendar-event'></i> Babak Penyisihan</td>
                        <td>30 September 2023</td>
                    </tr>
                    <tr>
                        <td><i class='bx bx-notepad'></i> Pengumuman Finalis</td>
                        <td>12 Oktober 2023</td>
                    </tr>
                    <tr>
                        <td><i class='bx bx-calendar-event'></i> Opening Ceremony</td>
                        <td>16 Oktober 2023</td>
                    </tr>
                    <tr>
                        <td><i class='bx bx-calendar-event'></i> Babak Final</td>
                        <td>20 Oktober 2023</td>
                    </tr>
                    <tr>
                        <td><i class='bx bx-notepad'></i> Pengumuman Pemenang</td>
                        <td>21 Oktober 2023</td>
                    </tr>
                </table>
                <?php if ($data): ?>
                    <div class="badge badge-success" style="margin-top: 2rem; display: block;">Sudah Daftar</div>
                    <a href="<?= base_url('profile'); ?>" class="btn btn-info-solid"
                        style="display: block; margin-top: 1rem;">Lihat Detail</a>
                <?php else: ?>
                    <a href="<?= base_url('profile/daftar-lomba'); ?>" class="btn btn-secondary"
                        style="margin-top: 2rem;">Daftar Sekarang</a>
                <?php endif; ?>
            </div>
        </div>
        <div class="countdown onscroll">
            <h1 class="onscroll">Penutupan Pendaftaran</h1>
            <ul>
                <li><span id="days">12</span>Hari</li>
                <li>:</li>
                <li><span id="hours">12</span>Jam</li>
                <li>:</li>
                <li><span id="minutes">12</span>Menit</li>
                <li>:</li>
                <li><span id="seconds">12</span>Detik</li>
            </ul>
        </div>
        <div class="informasi-lomba">
            <h1 class="onscroll-r">Informasi Lomba</h1>
            <ul>
                <li class="onscroll-r"><i class='bx bxs-chevron-right'></i> Seluruh peserta diwajibkan membaca guidebook
                    sebelum melakukan pendaftaran</li>
                <li class="onscroll-r"><i class='bx bxs-chevron-right'></i> Peserta mendaftarkan timnya pada laman
                    pendaftaran Networking Competition</li>
                <li class="onscroll-r"><i class='bx bxs-chevron-right'></i> Seluruh Rangkaian Kompetisi Akan
                    Diselenggarakan Secara hybrid di Fakultas Ilmu Komputer Universitas Sriwijaya dan Zoom Meeting</li>
                <li class="onscroll-r"><i class='bx bxs-chevron-right'></i> Silahkan download guidebook untuk pedoman
                    mengikuti lomba</li>
            </ul>
            <div class="links onscroll-r">
                <a href="<?= base_url('download/' . urlencode('GB NETWORKING.pdf')); ?>"
                    class="btn btn-secondary">Download
                    Guidebook</a>
            </div>
        </div>
        <div class="faq onscroll">
            <h1>Frequently Asked Question (FAQ)</h1>
            <ol>
                <li>
                    Bagaimana cara mendaftarkan diri dalam kompetisi Networking Technology Euphoria 2023?
                    <span class="answer">
                        Peserta telah mengikuti prosedur pendaftaran pada website resmi Techphoria 2023
                        (https://technologyeuphoria.web.id) dan melengkapi data pendaftaran dengan benar. Peserta yang
                        tidak memenuhi persyaratan pendaftaran sampai waktu yang ditentukan akan dinyatakan gugur.
                    </span>
                </li>
                <li>
                    Apakah setiap peserta harus melengkapi data pribadi secara terpisah?
                    <span class="answer">
                        Pengunggahan data diwakilkan oleh ketua tim dengan melampirkan foto/scan bukti pembayaran dan
                        Foto/scan Kartu Tanda Mahasiswa.
                    </span>
                </li>
                <li>
                    Bolehkah saya menjadi anggota di tim Networking yang lain?
                    <span class="answer">
                        Tidak, satu anggota hanya bisa bergabung dalam satu tim saja pada kompetisi ini.
                    </span>
                </li>
                <li>
                    Berapa jumlah maksimal anggota dalam satu tim?
                    <span class="answer">
                        Setiap tim yang mengikuti kompetisi memiliki maksimal 3 orang dengan 1 orang ketua tim.
                        Masing-masing anggota boleh berasal dari institusi yang berbeda.
                    </span>
                </li>
                <li>
                    Bagaimana sistem kompetisi Networking?
                    <span class="answer">
                        Pada kompetisi ini, perlombaan dilakukan di platform CTFD. Terdapat dua babak, yaitu babak
                        penyisihan yang dilaksanakan secara daring melalui zoom meeting dan babak final yang
                        diselenggarakan secara hybrid di Fakultas Ilmu Komputer Universitas Sriwijaya dan Zoom Meeting.
                    </span>
                </li>

            </ol>
        </div>
    </div>
</div>

<script type="text/javascript">
    let countdownDate = new Date('Sep 26, 2023').getTime();
    let x = setInterval(function () {
        let now = new Date().getTime();
        let distance = countdownDate - now;

        let days = Math.floor(distance / (1000 * 60 * 60 * 24));
        let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        let seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById('days').innerHTML = days;
        document.getElementById('hours').innerHTML = hours;
        document.getElementById('minutes').innerHTML = minutes;
        document.getElementById('seconds').innerHTML = seconds;

        if (distance < 0) {
            clearInterval(x);
            document.getElementById('days').innerHTML = 0;
            document.getElementById('hours').innerHTML = 0;
            document.getElementById('minutes').innerHTML = 0;
            document.getElementById('seconds').innerHTML = 0;
        }
    }, 1000);
</script>

<?= $this->endSection(); ?>