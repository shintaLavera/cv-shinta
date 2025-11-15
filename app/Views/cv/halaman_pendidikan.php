<?= $this->extend('cv/layout'); ?>

<?= $this->section('content'); ?>
<div class="content-sections-container">
    <div class="card card-custom p-4">
        <div class="card-body">
            <h2 class="section-title fw-bold text-dark">Riwayat Pendidikan Lengkap</h2> 
            
            <div class="timeline mt-5">
                <?php 
                // Data diserahkan dari Controller
                foreach ($pendidikan as $p) : 
                ?>
                <div class="timeline-item">
                    <span class="badge bg-secondary text-white mb-1"><?= $p['tahun_mulai']; ?> - <?= $p['tahun_selesai']; ?></span> 
                    <h5 class="mb-1 fw-bold"><?= $p['instansi']; ?></h5> 
                    <p class="text-muted mb-1"><?= $p['jurusan']; ?></p>
                    <p class="small">
                        <?php
                            // Membersihkan Keterangan dari Bintang/Markdown
                            $keterangan_bersih = strip_tags($p['keterangan'] ?? '');
                            $keterangan_bersih = str_replace(['**', '\*\*', '*', '_', '#'], '', $keterangan_bersih);
                            echo $keterangan_bersih;
                        ?>
                        
                        <?php if (isset($p['prestasi']) && $p['prestasi']) : ?>
                            <br><small class="fw-semibold text-primary"><i class="fas fa-trophy me-1"></i> Prestasi: <?= $p['prestasi']; ?></small>
                        <?php endif; ?>
                    </p>
                </div>
                <?php endforeach; ?>
            </div>
            
            <h4 class="mt-5 fw-bold text-dark section-title">Sertifikasi & Pelatihan</h4> 
            <ul class="list-group list-group-flush small mt-3">
                <li class="list-group-item bg-light"><i class="fas fa-certificate text-primary me-2"></i> Sertifikat: Full-Stack Web Developer (Platform Xyz) - 2024</li>
                <li class="list-group-item bg-light"><i class="fas fa-certificate text-primary me-2"></i> Pelatihan: Pemrograman Dasar ReactJS (Udemy) - 2023</li>
            </ul>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>