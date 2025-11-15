<?= $this->extend('cv/layout'); ?>

<?= $this->section('content'); ?>
<div class="content-sections-container">
    <div class="card card-custom p-4">
        <div class="card-body">

            <h2 class="section-title fw-bold text-dark">
                Riwayat Pengalaman Kerja & Organisasi
            </h2>

            <div class="row mt-5">

                <?php foreach ($pengalaman as $p): ?>
                    <div class="col-md-6 mb-4">
                        <div class="card shadow-sm border-0 h-100 card-custom">

                            <!-- HEADER -->
                            <div class="card-header small bg-light">
                                <i class="fas fa-calendar-alt me-2"></i>
                                <?= esc($p['jenis']); ?> (<?= esc($p['tahun']); ?>)
                            </div>

                            <!-- BODY -->
                            <div class="card-body">

                                <h5 class="card-title fw-bold mb-1">
                                    <?= esc($p['nama_tempat']); ?>
                                </h5>

                                <h6 class="card-subtitle mb-3 text-muted">
                                    <?= esc($p['posisi']); ?>
                                </h6>

                                <?php
                                    $deskripsi_bersih = strip_tags($p['deskripsi_singkat'] ?? '');
                                    $deskripsi_bersih = str_replace(['**', '\*\*', '*', '#', '_'], '', $deskripsi_bersih);
                                ?>

                                <p class="card-text small mb-2">
                                    <strong>Ringkasan:</strong> <?= esc($deskripsi_bersih); ?>
                                </p>

                                <!-- LIST KEGIATAN -->
                                <ul class="list-unstyled mt-3 small">

                                    <?php if (strpos($p['nama_tempat'], 'UKM Library') !== false): ?>

                                        <li>
                                            <i class="fas fa-users text-primary me-1"></i>
                                            Merancang program pengembangan potensi anggota.
                                        </li>
                                        <li>
                                            <i class="fas fa-book-reader text-primary me-1"></i>
                                            Mengelola dan mempromosikan kegiatan literasi komunitas.
                                        </li>
                                        <li>
                                            <i class="fas fa-chalkboard-teacher text-primary me-1"></i>
                                            Mengadakan sesi sharing dan pelatihan internal.
                                        </li>

                                    <?php elseif (strpos($p['nama_tempat'], 'Website CV') !== false): ?>

                                        <li>
                                            <i class="fas fa-code text-success me-1"></i>
                                            Mengimplementasikan logika Controller dan Routing CodeIgniter.
                                        </li>
                                        <li>
                                            <i class="fas fa-palette text-success me-1"></i>
                                            Mendesain dark & light mode berbasis CSS Variables.
                                        </li>
                                        <li>
                                            <i class="fas fa-database text-success me-1"></i>
                                            Mengelola CRUD data dinamis menggunakan MySQL.
                                        </li>

                                    <?php elseif (strpos($p['nama_tempat'], 'Himpunan Mahasiswa') !== false): ?>

                                        <li>
                                            <i class="fas fa-utensils text-info me-1"></i>
                                            Bertanggung jawab atas kebutuhan konsumsi acara.
                                        </li>
                                        <li>
                                            <i class="fas fa-boxes text-info me-1"></i>
                                            Melakukan stock opname logistik konsumsi.
                                        </li>
                                        <li>
                                            <i class="fas fa-handshake text-info me-1"></i>
                                            Berkoordinasi dengan vendor makanan lokal.
                                        </li>

                                    <?php else: ?>

                                        <li>
                                            <i class="fas fa-info-circle text-muted me-1"></i>
                                            Deskripsi tugas tidak spesifik.
                                        </li>

                                    <?php endif; ?>

                                </ul>

                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>

            </div>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>
