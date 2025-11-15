<?= $this->extend('cv/layout'); ?>

<?= $this->section('content'); ?>
<div class="content-sections-container">
    <div class="card card-custom p-4">
        <div class="card-body">
            <h2 class="section-title fw-bold text-dark">Keahlian Teknis & Soft Skill</h2>
            
            <h4 class="fw-bold mt-5 mb-3 text-dark section-title">Keahlian Teknis (Hard Skills)</h4>
            <div class="row">
                <?php 
                // Data diserahkan dari Controller
                foreach ($keahlian as $k) : 
                ?>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100 card-custom">
                        <div class="card-body">
                            <h5 class="card-title mb-1 fw-bold"><?= $k['nama_skill']; ?></h5>
                            <p class="card-text text-muted small"><?= $k['kategori']; ?></p>
                            <div class="progress" style="height: 20px;">
                                <?php
                                    $level_class = 'bg-warning'; // Dasar
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

            <h4 class="fw-bold mt-5 mb-3 text-dark section-title">Keahlian Non-Teknis (Soft Skills)</h4>
            <div class="d-flex flex-wrap gap-2">
                <span class="badge bg-primary fs-6 py-2 px-3"><i class="fas fa-users me-1"></i> Kerja Tim</span>
                <span class="badge bg-primary fs-6 py-2 px-3"><i class="fas fa-lightbulb me-1"></i> Problem Solving</span>
                <span class="badge bg-primary fs-6 py-2 px-3"><i class="fas fa-comments me-1"></i> Komunikasi Efektif</span>
                <span class="badge bg-primary fs-6 py-2 px-3"><i class="fas fa-clock me-1"></i> Manajemen Waktu</span>
                <span class="badge bg-primary fs-6 py-2 px-3"><i class="fas fa-running me-1"></i> Adaptasi Cepat</span>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>