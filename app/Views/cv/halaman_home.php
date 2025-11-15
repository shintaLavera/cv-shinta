<?= $this->extend('cv/layout'); ?>

<?= $this->section('content'); ?>

<div class="hero-section">
    <div class="container">
        <img src="<?= base_url('img/shinta_lavera.jpg'); ?>" alt="Shinta Lavera" class="profile-img mb-4">
        
        <h1 class="display-5 fw-bold">Shinta Lavera</h1>
        <p class="lead text-muted"><?= $biodata->status_studi; ?></p>
        
        <p class="mx-auto" style="max-width: 700px;">
            <?= $biodata->ringkasan_diri; ?>
        </p>

        <div class="d-flex justify-content-center flex-wrap gap-3 mt-4">
            
            <a href="mailto:<?= $biodata->email; ?>" class="btn-action-custom">
                <i class="fas fa-envelope me-1"></i> Email
            </a>
            
            <a href="<?= $biodata->link_whatsapp; ?>" target="_blank" class="btn-action-custom">
                <i class="fab fa-whatsapp me-1"></i> WhatsApp
            </a>
            
            <a href="<?= $biodata->link_linkedin; ?>" target="_blank" class="btn-action-custom">
                <i class="fab fa-linkedin me-1"></i> LinkedIn
            </a>
        </div>
    </div>
</div>

<div class="content-sections-container">

    <div class="card card-custom p-4 mb-5" id="pendidikan">
        <div class="card-body">
            <h2 class="section-title fw-bold text-dark">Ringkasan Pendidikan</h2> 
            <div class="timeline">
                <?php 
                // Batasi hanya 1 item untuk ringkasan di Beranda
                $pendidikan_ringkas = array_slice($pendidikan ?? [], 0, 1);
                foreach ($pendidikan_ringkas as $p) : 
                ?>
                <div class="timeline-item">
                    <span class="badge bg-secondary text-white mb-1"><?= $p['tahun_mulai']; ?> - <?= $p['tahun_selesai']; ?></span> 
                    <h5 class="mb-1 fw-bold"><?= $p['instansi']; ?></h5> 
                    <p class="text-muted mb-1"><?= $p['jurusan']; ?></p>
                    <p class="small"><?= $p['keterangan']; ?></p>
                </div>
                <?php endforeach; ?>
                <a href="/pendidikan" class="btn btn-sm btn-link text-primary mt-3 p-0">Lihat Selengkapnya &raquo;</a>
            </div>
        </div>
    </div>

    <div class="card card-custom p-4 mb-5" id="pengalaman">
        <div class="card-body">
            <h2 class="section-title fw-bold text-dark">Ringkasan Pengalaman</h2>
            <div class="row">
                <?php 
                // Batasi hanya 2 item untuk ringkasan di Beranda
                $pengalaman_ringkas = array_slice($pengalaman ?? [], 0, 2);
                foreach ($pengalaman_ringkas as $p) : 
                ?>
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm border-0 h-100 card-custom">
                        <div class="card-header small bg-light"> 
                            <i class="fas fa-calendar-alt me-2"></i> <?= $p['jenis']; ?> (<?= $p['tahun']; ?>)
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold"><?= $p['nama_tempat']; ?></h5> 
                            <h6 class="card-subtitle mb-2 text-muted"><?= $p['posisi']; ?></h6>
                            <p class="card-text small"><?= $p['deskripsi_singkat']; ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="text-center text-md-start">
                <a href="/pengalaman" class="btn btn-sm btn-link text-primary mt-3 p-0">Lihat Selengkapnya &raquo;</a>
            </div>
        </div>
    </div>

    <div class="card card-custom p-4" id="keahlian">
        <div class="card-body">
            <h2 class="section-title fw-bold text-dark">Ringkasan Keahlian</h2>
            <div class="row">
                <?php 
                // Batasi hanya 3 item untuk ringkasan di Beranda
                $keahlian_ringkas = array_slice($keahlian ?? [], 0, 3);
                foreach ($keahlian_ringkas as $k) : 
                ?>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100 card-custom">
                        <div class="card-body">
                            <h5 class="card-title mb-1 fw-bold"><?= $k['nama_skill']; ?></h5>
                            <p class="card-text text-muted small"><?= $k['kategori']; ?></p>
                            <div class="progress" style="height: 20px;">
                                <?php
                                    $level_class = 'bg-warning'; 
                                    $width = '50%';
                                    if ($k['level'] == 'Expert') { 
                                        $level_class = 'bg-primary'; 
                                        $width = '90%'; 
                                    }
                                    elseif ($k['level'] == 'Intermediate') { 
                                        $level_class = 'bg-success'; 
                                        $width = '70%'; 
                                    }
                                ?>
                                <div class="progress-bar <?= $level_class; ?>" role="progressbar" style="width: <?= $width; ?>;" aria-valuenow="<?= str_replace('%', '', $width); ?>" aria-valuemin="0" aria-valuemax="100"><?= $k['level']; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="text-center text-md-start">
                <a href="/keahlian" class="btn btn-sm btn-link text-primary mt-3 p-0">Lihat Selengkapnya &raquo;</a>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>