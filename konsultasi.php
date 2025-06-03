<?php include "koneksi.php"; ?>
<style>
    /* Reset dan font modern */
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap');

    body {
        font-family: 'Inter', sans-serif;
        background: linear-gradient(135deg, #e6f0ff 0%, #ffffff 100%);
        margin: 0;
        padding: 0;
        color: #212121;
    }

    .container {
        max-width: 900px;
        margin: 40px auto;
        padding: 0 20px 40px;
    }

    .card {
        background: #ffffff;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0, 123, 255, 0.1);
        overflow: hidden;
        transition: box-shadow 0.3s ease;
    }

    .card:hover {
        box-shadow: 0 15px 40px rgba(0, 123, 255, 0.2);
    }

    .card-header {
        background-color: #007bff;
        color: white;
        padding: 24px 30px;
        font-size: 1.8rem;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 12px;
        box-shadow: inset 0 -4px 6px rgba(0, 0, 0, 0.1);
    }

    .card-header i {
        font-size: 2rem;
        color: #a3c0ff;
        flex-shrink: 0;
    }

    .card-body {
        padding: 30px;
    }

    .text-center {
        text-align: center;
    }

    b {
        font-weight: 600;
        font-size: 1.1rem;
        color: #004085;
    }

    form {
        margin-top: 10px;
    }

    table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0 12px;
    }

    table.table-bordered {
        border-spacing: 0;
    }

    table th,
    table td {
        padding: 14px 18px;
        vertical-align: middle;
    }

    table.table-bordered th {
        background-color: #007bff;
        color: white;
        font-weight: 600;
        border: none;
        text-align: center;
        border-radius: 8px 8px 0 0;
    }

    table.table-bordered td {
        background: #f9fbff;
        border-bottom: 1px solid #d1d9f4;
        border-left: 1px solid #d1d9f4;
        border-right: 1px solid #d1d9f4;
        border-radius: 0;
        transition: background-color 0.2s ease;
    }

    table.table-bordered tr:last-child td {
        border-radius: 0 0 8px 8px;
        border-bottom: none;
    }

    table.table-bordered tr:hover td {
        background-color: #e6f0ff;
    }

    table tr td:first-child {
        text-align: center;
        width: 48px;
    }

    input[type="checkbox"] {
        width: 18px;
        height: 18px;
        cursor: pointer;
        accent-color: #007bff;
        transition: accent-color 0.3s ease;
    }

    input[type="checkbox"]:hover {
        accent-color: #0056b3;
    }

    button.btn-success {
        background-color: #007bff;
        border: none;
        padding: 12px 28px;
        font-weight: 600;
        color: white;
        border-radius: 8px;
        cursor: pointer;
        font-size: 1rem;
        margin-top: 24px;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 6px 12px rgba(0, 123, 255, 0.3);
        display: inline-flex;
        align-items: center;
        gap: 8px;
        justify-content: center;
    }

    button.btn-success:hover {
        background-color: #0056b3;
        box-shadow: 0 8px 24px rgba(0, 123, 255, 0.5);
    }

    button.btn-success i {
        font-size: 1.2rem;
    }

    /* Modal styles */
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        animation: fadeIn 0.3s ease;
    }

    .modal-content {
        background-color: #ffffff;
        margin: 10% auto;
        padding: 0;
        border-radius: 12px;
        width: 90%;
        max-width: 500px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
        animation: slideIn 0.3s ease;
    }

    .modal-header {
        background-color: #007bff;
        color: white;
        padding: 20px;
        border-radius: 12px 12px 0 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .modal-header h4 {
        margin: 0;
        font-weight: 600;
    }

    .close {
        color: white;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
        transition: opacity 0.3s ease;
    }

    .close:hover {
        opacity: 0.7;
    }

    .modal-body {
        padding: 30px;
    }

    .cf-option {
        margin: 15px 0;
        padding: 15px;
        border: 2px solid #e9ecef;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .cf-option:hover {
        border-color: #007bff;
        background-color: #f8f9ff;
    }

    .cf-option.selected {
        border-color: #007bff;
        background-color: #e6f0ff;
        box-shadow: 0 4px 12px rgba(0, 123, 255, 0.2);
    }

    .cf-option input[type="radio"] {
        width: 20px;
        height: 20px;
        accent-color: #007bff;
    }

    .cf-label {
        font-weight: 600;
        color: #212529;
    }

    .cf-value {
        color: #007bff;
        font-weight: 500;
        margin-left: auto;
    }

    .btn-confirm {
        background-color: #28a745;
        color: white;
        border: none;
        padding: 12px 24px;
        border-radius: 8px;
        cursor: pointer;
        font-weight: 600;
        width: 100%;
        margin-top: 20px;
        transition: background-color 0.3s ease;
    }

    .btn-confirm:hover {
        background-color: #218838;
    }

    .selected-symptoms {
        margin-top: 20px;
        padding: 20px;
        background-color: #f8f9fa;
        border-radius: 8px;
        border-left: 4px solid #007bff;
    }

    .symptom-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 0;
        border-bottom: 1px solid #dee2e6;
    }

    .symptom-item:last-child {
        border-bottom: none;
    }

    .symptom-name {
        font-weight: 500;
        color: #212529;
    }

    .cf-badge {
        background-color: #007bff;
        color: white;
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 600;
    }

    /* Alert styles */
    .alert {
        margin-top: 24px;
        border-radius: 8px;
        padding: 18px 24px;
        font-weight: 600;
        font-size: 1rem;
    }

    .alert-danger {
        background-color: #f8d7da;
        color: #842029;
        border: 1px solid #f5c2c7;
    }

    .alert-info {
        background-color: #d1e7ff;
        color: #084298;
        border: 1px solid #a6c8ff;
    }

    /* Animations */
    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes slideIn {
        from {
            transform: translateY(-50px);
            opacity: 0;
        }

        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    /* Other existing styles remain the same */
    .bg-primary {
        background-color: #3390ff !important;
        border-radius: 16px;
    }

    .text-white {
        color: white !important;
    }

    .card.shadow.mb-4 {
        margin-top: 24px;
        border-radius: 12px;
        box-shadow: 0 8px 20px rgba(0, 123, 255, 0.1);
        border: none;
        transition: box-shadow 0.3s ease;
    }

    .card.shadow.mb-4:hover {
        box-shadow: 0 12px 36px rgba(0, 123, 255, 0.2);
    }

    .card-header.py-3 {
        background-color: #e3f2fd;
        color: #042a63;
        padding: 20px 24px;
        font-weight: 700;
        font-size: 1.2rem;
        border-bottom: none;
        border-radius: 12px 12px 0 0;
    }

    .card-body p {
        color: #212529;
        font-size: 1rem;
        line-height: 1.6;
        padding: 0 24px 24px;
        margin: 0;
    }
</style>

<link href="img/favicon.ico" rel="icon" />
<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
    rel="stylesheet" />
<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
<!-- Libraries Stylesheet -->
<link href="lib/animate/animate.min.css" rel="stylesheet" />
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
<link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
<!-- Customized Bootstrap Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<!-- Template Stylesheet -->
<link href="css/style.css" rel="stylesheet" />

<!-- Topbar Start -->
<div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-map-marker-alt text-primary me-2"></small>
                <small>Politeknik Negeri Medan, Medan, Indonesia</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center py-3">
                <small class="far fa-clock text-primary me-2"></small>
                <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-phone-alt text-primary me-2"></small>
                <small>+62 838-4359-3968</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-phone-alt text-primary me-2"></small>
                <small>+62 815-3014-885</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-phone-alt text-primary me-2"></small>
                <small>+62 813-9666-4533</small>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
    <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h1 class="m-0 text-primary">
            <i class="far fa-hospital me-3"></i>Klinik Group VI
        </h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="index.html" class="nav-item nav-link ">Home</a>
            <a href="about.html" class="nav-item nav-link active">About</a>
            <a href="contact.html" class="nav-item nav-link">Contact</a>
        </div>
        <a href="appointment.html" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">
            Konsultasi<i class="fa fa-arrow-right ms-3"></i>
        </a>
    </div>
</nav>
<!-- Navbar End -->

<div class="container">
    <div class="col-12">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-fw fa-bolt mr-1"></i> Konsultasi Gejala Penyakit
                </h6>
            </div>

            <div class="card-body">
                <div class="text-center mb-4">
                    <b>Pilihlah Gejala Yang Terjadi</b>
                </div>

                <form method="post" id="konsultasiForm">
                    <!-- Tabel dengan kolom tambahan untuk Tingkat Keyakinan -->
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead style="background-color: #17a2b8; color: white;">
                            <tr>
                                <th style="width: 10%; text-align: center;">Pilih</th>
                                <th style="width: 60%;">Gejala</th>
                                <th style="width: 30%; text-align: center;">Tingkat Keyakinan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sqli = "SELECT * FROM tb_gejala ORDER BY id ASC";
                            $result = mysqli_query($koneksi, $sqli);
                            while ($row = mysqli_fetch_object($result)) {
                                // Check if this symptom was previously selected
                                $isChecked = isset($_POST['gejala']) && in_array($row->id, $_POST['gejala']);
                                $cfValue = isset($_POST['cf_user'][$row->id]) ? $_POST['cf_user'][$row->id] : '';
                                $cfLabel = '';
                                
                                if ($cfValue == '0.6') $cfLabel = 'Cukup Yakin';
                                elseif ($cfValue == '0.8') $cfLabel = 'Yakin';
                                elseif ($cfValue == '1.0') $cfLabel = 'Sangat Yakin';
                                
                                echo "<tr id='row_{$row->id}'>
                                        <td class='align-middle text-center'>
                                            <input type='checkbox' name='gejala[]' value='{$row->id}' class='gejala-checkbox'
                                            " . ($isChecked ? " checked" : "") . ">
                                        </td>
                                        <td class='align-middle'>{$row->kd_gejala} - {$row->gejala}</td>
                                        <td class='align-middle text-center'>
                                            <span class='cf-display' id='cf_display_{$row->id}' style='" . ($isChecked ? "display: inline-block;" : "display: none;") . "'>
                                                <span class='badge badge-" . ($cfValue == '1.0' ? 'success' : ($cfValue == '0.8' ? 'warning' : 'info')) . "'>{$cfLabel}</span>
                                            </span>
                                            <span class='cf-placeholder' id='cf_placeholder_{$row->id}' style='" . ($isChecked ? "display: none;" : "display: inline-block;") . " color: #6c757d;'>
                                                Pilih
                                            </span>
                                        </td>
                                      </tr>";
                            }
                            ?>
                        </tbody>
                    </table>

                    <!-- Area untuk menampilkan ringkasan gejala yang dipilih -->
                    <div id="selectedSymptoms" class="selected-symptoms mt-4" style="display: none;">
                        <div class="alert alert-info">
                            <h5><i class="fas fa-check-circle text-success"></i> Ringkasan Gejala yang Dipilih</h5>
                            <div id="symptomsList"></div>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-success btn-lg" id="prosesBtn" disabled>
                            <i class="fa fa-check"></i> Proses Konsultasi
                        </button>
                    </div>
                </form>

                <!-- Modal untuk CF User dengan desain yang lebih menarik -->
                <div id="cfModal" class="modal" style="display: none; position: fixed; z-index: 1000; left: 0; top: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(0,0,0,0.6), rgba(0,123,255,0.3)); backdrop-filter: blur(5px);">
                    <div class="modal-content" style="background: linear-gradient(145deg, #ffffff, #f8f9fa); margin: 3% auto; padding: 0; border-radius: 20px; width: 90%; max-width: 600px; box-shadow: 0 25px 50px rgba(0,0,0,0.25), 0 0 0 1px rgba(255,255,255,0.05); animation: modalSlideIn 0.4s ease-out;">
                        
                        <!-- Header dengan gradient dan ikon -->
                        <div class="modal-header" style="padding: 30px; border-bottom: none; border-radius: 20px 20px 0 0; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; text-align: center; position: relative;">
                            <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
                                <i class="fas fa-brain" style="font-size: 32px; margin-right: 12px; opacity: 0.9;"></i>
                                <h3 id="modalTitle" style="margin: 0; font-weight: 700; font-size: 24px; text-shadow: 0 2px 4px rgba(0,0,0,0.3);">Tingkat Keyakinan</h3>
                            </div>
                            <p style="margin: 0; opacity: 0.9; font-size: 16px; font-weight: 400;">Seberapa yakin Anda merasakan gejala ini?</p>
                            <span class="close" style="position: absolute; right: 25px; top: 25px; font-size: 32px; font-weight: 300; cursor: pointer; opacity: 0.8; transition: all 0.3s; color: white; text-shadow: 0 2px 4px rgba(0,0,0,0.3);">&times;</span>
                        </div>
                        
                        <div class="modal-body" style="padding: 40px;">
                            <!-- Nama gejala dengan styling yang menarik -->
                            <div id="gejalaNama" style="font-weight: 600; color: #2c3e50; margin-bottom: 35px; font-size: 18px; text-align: center; padding: 20px; background: linear-gradient(135deg, #667eea20, #764ba220); border-radius: 15px; border-left: 5px solid #667eea; box-shadow: 0 4px 15px rgba(102, 126, 234, 0.1);"></div>

                            <div class="cf-options">
                                <!-- Option Cukup Yakin -->
                                <div class="cf-option" onclick="selectCF(0.6, 'Cukup Yakin', event)" style="padding: 20px; margin: 15px 0; border: 2px solid #e3f2fd; border-radius: 15px; cursor: pointer; transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); display: flex; justify-content: space-between; align-items: center; background: linear-gradient(135deg, #ffffff, #f8f9fa); position: relative; overflow: hidden;">
                                    <div style="display: flex; align-items: center; z-index: 2;">
                                        <div style="width: 20px; height: 20px; border: 2px solid #2196f3; border-radius: 50%; margin-right: 15px; display: flex; align-items: center; justify-content: center; background: #fff; transition: all 0.3s;">
                                            <input type="radio" name="cf_level" value="0.6" id="cf_06" style="display: none;">
                                            <i class="fas fa-check" style="font-size: 10px; color: #2196f3; opacity: 0; transition: all 0.3s;"></i>
                                        </div>
                                        <div>
                                            <label for="cf_06" class="cf-label" style="font-weight: 600; cursor: pointer; color: #2c3e50; font-size: 16px;">Cukup Yakin</label>
                                            <p style="margin: 0; font-size: 13px; color: #6c757d; margin-top: 2px;">Saya cukup yakin merasakan gejala ini</p>
                                        </div>
                                    </div>
                                    <div style="z-index: 2;">
                                        <span class="cf-value" style="background: linear-gradient(135deg, #2196f3, #1976d2); color: white; padding: 8px 16px; border-radius: 25px; font-weight: 600; font-size: 14px; box-shadow: 0 4px 15px rgba(33, 150, 243, 0.3);">CF = 0.6</span>
                                    </div>
                                    <div class="option-bg" style="position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(135deg, #2196f315, #1976d215); transition: all 0.4s; z-index: 1;"></div>
                                </div>

                                <!-- Option Yakin -->
                                <div class="cf-option" onclick="selectCF(0.8, 'Yakin', event)" style="padding: 20px; margin: 15px 0; border: 2px solid #fff3e0; border-radius: 15px; cursor: pointer; transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); display: flex; justify-content: space-between; align-items: center; background: linear-gradient(135deg, #ffffff, #f8f9fa); position: relative; overflow: hidden;">
                                    <div style="display: flex; align-items: center; z-index: 2;">
                                        <div style="width: 20px; height: 20px; border: 2px solid #ff9800; border-radius: 50%; margin-right: 15px; display: flex; align-items: center; justify-content: center; background: #fff; transition: all 0.3s;">
                                            <input type="radio" name="cf_level" value="0.8" id="cf_08" style="display: none;">
                                            <i class="fas fa-check" style="font-size: 10px; color: #ff9800; opacity: 0; transition: all 0.3s;"></i>
                                        </div>
                                        <div>
                                            <label for="cf_08" class="cf-label" style="font-weight: 600; cursor: pointer; color: #2c3e50; font-size: 16px;">Yakin</label>
                                            <p style="margin: 0; font-size: 13px; color: #6c757d; margin-top: 2px;">Saya yakin merasakan gejala ini</p>
                                        </div>
                                    </div>
                                    <div style="z-index: 2;">
                                        <span class="cf-value" style="background: linear-gradient(135deg, #ff9800, #f57c00); color: white; padding: 8px 16px; border-radius: 25px; font-weight: 600; font-size: 14px; box-shadow: 0 4px 15px rgba(255, 152, 0, 0.3);">CF = 0.8</span>
                                    </div>
                                    <div class="option-bg" style="position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(135deg, #ff980015, #f57c0015); transition: all 0.4s; z-index: 1;"></div>
                                </div>

                                <!-- Option Sangat Yakin -->
                               <div class="cf-option" onclick="selectCF(1.0, 'Sangat Yakin', event)" style="padding: 20px; margin: 15px 0; border: 2px solid #e8f5e8; border-radius: 15px; cursor: pointer; transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); display: flex; justify-content: space-between; align-items: center; background: linear-gradient(135deg, #ffffff, #f8f9fa); position: relative; overflow: hidden;">
                                    <div style="display: flex; align-items: center; z-index: 2;">
                                        <div style="width: 20px; height: 20px; border: 2px solid #4caf50; border-radius: 50%; margin-right: 15px; display: flex; align-items: center; justify-content: center; background: #fff; transition: all 0.3s;">
                                            <input type="radio" name="cf_level" value="1.0" id="cf_10" style="display: none;">
                                            <i class="fas fa-check" style="font-size: 10px; color: #4caf50; opacity: 0; transition: all 0.3s;"></i>
                                        </div>
                                        <div>
                                            <label for="cf_10" class="cf-label" style="font-weight: 600; cursor: pointer; color: #2c3e50; font-size: 16px;">Sangat Yakin</label>
                                            <p style="margin: 0; font-size: 13px; color: #6c757d; margin-top: 2px;">Saya sangat yakin merasakan gejala ini</p>
                                        </div>
                                    </div>
                                    <div style="z-index: 2;">
                                        <span class="cf-value" style="background: linear-gradient(135deg, #4caf50, #388e3c); color: white; padding: 8px 16px; border-radius: 25px; font-weight: 600; font-size: 14px; box-shadow: 0 4px 15px rgba(76, 175, 80, 0.3);">CF = 1.0</span>
                                    </div>
                                    <div class="option-bg" style="position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(135deg, #4caf5015, #388e3c15); transition: all 0.4s; z-index: 1;"></div>
                                </div>
                            </div>

                            <!-- Tombol konfirmasi dengan styling menarik -->
                            <div style="text-align: center; margin-top: 35px;">
                                <button type="button" class="btn-confirm-cf" onclick="confirmCF()" disabled style="background: linear-gradient(135deg, #667eea, #764ba2); color: white; border: none; padding: 15px 40px; border-radius: 30px; font-weight: 700; font-size: 16px; cursor: pointer; transition: all 0.3s; box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4); opacity: 0.6; transform: translateY(10px);">
                                    <i class="fas fa-check-circle" style="margin-right: 8px;"></i> Konfirmasi Pilihan
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <style>
                    /* Animasi untuk modal */
                    @keyframes modalSlideIn {
                        from {
                            opacity: 0;
                            transform: translateY(-50px) scale(0.9);
                        }
                        to {
                            opacity: 1;
                            transform: translateY(0) scale(1);
                        }
                    }

                    /* Hover effects untuk CF options */
                    .cf-option:hover {
                        transform: translateY(-5px) scale(1.02);
                        box-shadow: 0 15px 35px rgba(0,0,0,0.1);
                    }

                    .cf-option:hover .option-bg {
                        left: 0;
                    }

                    .cf-option.selected {
                        transform: translateY(-5px) scale(1.02);
                        box-shadow: 0 15px 35px rgba(102, 126, 234, 0.2);
                        border-color: #667eea !important;
                    }

                    .cf-option.selected .option-bg {
                        left: 0;
                    }

                    .cf-option.selected .fas.fa-check {
                        opacity: 1;
                    }

                    /* Styling untuk close button */
                    .close:hover {
                        opacity: 1 !important;
                        transform: rotate(90deg);
                    }

                    /* Styling untuk tombol konfirmasi */
                    .btn-confirm-cf:enabled {
                        opacity: 1 !important;
                        transform: translateY(0) !important;
                        box-shadow: 0 12px 35px rgba(102, 126, 234, 0.6) !important;
                    }

                    .btn-confirm-cf:enabled:hover {
                        transform: translateY(-3px);
                        box-shadow: 0 15px 40px rgba(102, 126, 234, 0.7);
                    }

                    .btn-confirm-cf:enabled:active {
                        transform: translateY(-1px);
                    }
                    
                    /* Styling untuk tabel dan badge */
                    .symptom-item {
                        padding: 15px;
                        margin: 10px 0;
                        border-left: 4px solid #667eea;
                        background: linear-gradient(135deg, #f8f9fa, #ffffff);
                        border-radius: 10px;
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
                        transition: all 0.3s;
                    }

                    .symptom-item:hover {
                        transform: translateX(5px);
                        box-shadow: 0 6px 20px rgba(0,0,0,0.1);
                    }
                    
                    .symptom-name {
                        font-weight: 600;
                        color: #2c3e50;
                        font-size: 15px;
                    }
                    
                    .cf-badge {
                        font-size: 13px;
                        padding: 8px 15px;
                        border-radius: 20px;
                        background: linear-gradient(135deg, #667eea, #764ba2);
                        color: white;
                        font-weight: 600;
                        box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
                    }

                    /* Styling untuk tabel */
                    .table th {
                        font-weight: 700;
                        text-transform: uppercase;
                        font-size: 13px;
                        letter-spacing: 1px;
                        padding: 20px 15px;
                    }

                    .table td {
                        padding: 18px 15px;
                        vertical-align: middle;
                    }

                    /* Badge dengan warna yang kontras dan mudah dibaca */
                    .badge {
                        font-size: 12px;
                        padding: 8px 12px;
                        font-weight: 700;
                        border-radius: 20px;
                        box-shadow: 0 2px 8px rgba(0,0,0,0.15);
                        text-shadow: none;
                    }

                    .badge-success {
                        background: linear-gradient(135deg, #28a745, #20c997) !important;
                        color: white !important;
                    }

                    .badge-warning {
                        background: linear-gradient(135deg, #ffc107, #fd7e14) !important;
                        color: #212529 !important;
                        font-weight: 800;
                    }

                    .badge-info {
                        background: linear-gradient(135deg, #17a2b8, #007bff) !important;
                        color: white !important;
                    }

                    /* Hover effects untuk checkbox */
                    .gejala-checkbox {
                        transform: scale(1.3);
                        cursor: pointer;
                    }

                    /* Styling untuk card header */
                    .card-header {
                        background: linear-gradient(135deg, #667eea, #764ba2);
                        border: none;
                    }

                    .card-header h6 {
                        color: white !important;
                        font-weight: 700;
                        text-shadow: 0 2px 4px rgba(0,0,0,0.3);
                    }

                    /* Alert styling */
                    .alert-info {
                        background: linear-gradient(135deg, #d1ecf120, #bee5eb20);
                        border: 1px solid #bee5eb;
                        border-left: 5px solid #17a2b8;
                        border-radius: 10px;
                    }

                    /* Button styling */
                    #prosesBtn {
                        background: linear-gradient(135deg, #28a745, #20c997);
                        border: none;
                        border-radius: 25px;
                        padding: 15px 35px;
                        font-weight: 700;
                        text-transform: uppercase;
                        letter-spacing: 1px;
                        box-shadow: 0 8px 25px rgba(40, 167, 69, 0.4);
                        transition: all 0.3s;
                    }

                    #prosesBtn:enabled:hover {
                        transform: translateY(-3px);
                        box-shadow: 0 12px 35px rgba(40, 167, 69, 0.6);
                    }

                    #prosesBtn:disabled {
                        background: #6c757d;
                        box-shadow: none;
                    }
                </style>

                <script>
                    let selectedSymptoms = {};
                    let currentGejalaId = null;
                    let currentGejalaName = '';

                    // inisialisasi dengan data yang sudah ada (jika form di-submit sebelumnya)
                    document.addEventListener('DOMContentLoaded', function() {
                        // Restore state dari form submission sebelumnya
                        <?php if (isset($_POST['gejala']) && isset($_POST['cf_user'])): ?>
                            <?php foreach ($_POST['gejala'] as $gejalaId): ?>
                                <?php if (isset($_POST['cf_user'][$gejalaId])): ?>
                                    <?php
                                    $cfValue = $_POST['cf_user'][$gejalaId];
                                    $cfLabel = '';
                                    if ($cfValue == '0.6') $cfLabel = 'Cukup Yakin';
                                    elseif ($cfValue == '0.8') $cfLabel = 'Yakin';
                                    elseif ($cfValue == '1.0') $cfLabel = 'Sangat Yakin';
                                    
                                    // mengambil nama gejala
                                    $sqli = "SELECT * FROM tb_gejala WHERE id = $gejalaId";
                                    $result = mysqli_query($koneksi, $sqli);
                                    $row = mysqli_fetch_object($result);
                                    $gejalaName = $row->kd_gejala . ' - ' . $row->gejala;
                                    ?>
                                    selectedSymptoms['<?= $gejalaId ?>'] = {
                                        name: '<?= addslashes($gejalaName) ?>',
                                        cf: <?= $cfValue ?>,
                                        label: '<?= $cfLabel ?>'
                                    };
                                <?php endif; ?>
                            <?php endforeach; ?>
                            updateSelectedSymptomsDisplay();
                        <?php endif; ?>
                    });

                    // Event listener untuk checkbox
                    document.querySelectorAll('.gejala-checkbox').forEach(checkbox => {
                        checkbox.addEventListener('change', function () {
                            const gejalaId = this.value;
                            const gejalaRow = this.closest('tr');
                            const gejalaText = gejalaRow.querySelector('td:nth-child(2)').textContent;

                            if (this.checked) {
                                // Tampilkan modal untuk memilih CF
                                currentGejalaId = gejalaId;
                                currentGejalaName = gejalaText;
                                document.getElementById('gejalaNama').textContent = gejalaText;
                                document.getElementById('cfModal').style.display = 'block';
                            } else {
                                // Hapus dari selected symptoms
                                delete selectedSymptoms[gejalaId];
                                updateSelectedSymptomsDisplay();
                                updateTableDisplay(gejalaId, '', '');
                            }
                        });
                    });

                    // Fungsi untuk memilih CF
function selectCF(cfValue, cfLabel, event) {
    // Reset semua pilihan
    document.querySelectorAll('.cf-option').forEach(option => {
        option.classList.remove('selected');
    });

    // Pilih option yang diklik
    if (event && event.currentTarget) {
        event.currentTarget.classList.add('selected');
        event.currentTarget.querySelector('input[name="cf_level"]').checked = true;
    }

    // Simpan sementara value dan label
    document.getElementById('cfModal').dataset.selectedValue = cfValue;
    document.getElementById('cfModal').dataset.selectedLabel = cfLabel;

    // Enable tombol konfirmasi
    document.querySelector('.btn-confirm-cf').disabled = false;
}



// Fungsi untuk konfirmasi CF
function confirmCF() {
    const cfModal = document.getElementById('cfModal');
    const cfValue = parseFloat(cfModal.dataset.selectedValue);
    const cfLabel = cfModal.dataset.selectedLabel;

    if (cfValue && currentGejalaId) {
        // Simpan ke selectedSymptoms
        selectedSymptoms[currentGejalaId] = {
            name: currentGejalaName,
            cf: cfValue,
            label: cfLabel
        };

        // Update display di tabel
        updateTableDisplay(currentGejalaId, cfLabel, cfValue);

        // Update ringkasan
        updateSelectedSymptomsDisplay();

        // Tutup modal
        closeModal();
    }
}


                    // Fungsi untuk update tampilan di tabel
                    function updateTableDisplay(gejalaId, cfLabel, cfValue) {
                        const cfDisplay = document.getElementById(`cf_display_${gejalaId}`);
                        const cfPlaceholder = document.getElementById(`cf_placeholder_${gejalaId}`);
                        
                        if (cfLabel) {
                            // Tentukan class badge berdasarkan nilai CF
                            let badgeClass = 'badge-info';
                            if (cfValue == 1.0) badgeClass = 'badge-success';
                            else if (cfValue == 0.8) badgeClass = 'badge-warning';
                            
                            cfDisplay.innerHTML = `<span class="badge ${badgeClass}">${cfLabel}</span>`;
                            cfDisplay.style.display = 'inline-block';
                            cfPlaceholder.style.display = 'none';
                        } else {
                            cfDisplay.style.display = 'none';
                            cfPlaceholder.style.display = 'inline-block';
                        }
                    }

                    // Fungsi untuk update tampilan ringkasan gejala yang dipilih
                    function updateSelectedSymptomsDisplay() {
                        const container = document.getElementById('selectedSymptoms');
                        const list = document.getElementById('symptomsList');

                        if (Object.keys(selectedSymptoms).length > 0) {
                            container.style.display = 'block';
                            list.innerHTML = '';

                            Object.entries(selectedSymptoms).forEach(([id, data]) => {
                                const item = document.createElement('div');
                                item.className = 'symptom-item';
                                item.innerHTML = `
                                    <span class="symptom-name">${data.name}</span>
                                    <span class="cf-badge">${data.label} (CF: ${data.cf})</span>
                                `;
                                list.appendChild(item);
                            });

                            // Enable tombol proses jika minimal 2 gejala
                            document.getElementById('prosesBtn').disabled = Object.keys(selectedSymptoms).length < 2;
                        } else {
                            container.style.display = 'none';
                            document.getElementById('prosesBtn').disabled = true;
                        }
                    }

                    // Fungsi untuk menutup modal
                    function closeModal() {
                        document.getElementById('cfModal').style.display = 'none';

                        // Reset modal
                        document.querySelectorAll('.cf-option').forEach(option => {
                            option.classList.remove('selected');
                        });
                        document.querySelectorAll('input[name="cf_level"]').forEach(radio => {
                            radio.checked = false;
                        });
                        document.querySelector('.btn-confirm-cf').disabled = true;
                    }

                    // Event listener untuk tombol close
                    document.querySelector('.close').addEventListener('click', function () {
                        // Uncheck checkbox yang sedang diproses
                        if (currentGejalaId) {
                            document.querySelector(`input[value="${currentGejalaId}"]`).checked = false;
                        }
                        closeModal();
                    });

                    // Event listener untuk klik di luar modal
                    window.addEventListener('click', function (event) {
                        const modal = document.getElementById('cfModal');
                        if (event.target === modal) {
                            // Uncheck checkbox yang sedang diproses
                            if (currentGejalaId) {
                                document.querySelector(`input[value="${currentGejalaId}"]`).checked = false;
                            }
                            closeModal();
                        }
                    });

                    // Override form submission untuk menyertakan CF data
                    document.getElementById('konsultasiForm').addEventListener('submit', function (e) {
                        // Hapus hidden inputs yang sudah ada (jika ada)
                        this.querySelectorAll('input[name^="cf_user"]').forEach(input => {
                            input.remove();
                        });

                        // Tambahkan hidden inputs untuk CF data
                        Object.entries(selectedSymptoms).forEach(([id, data]) => {
                            const hiddenInput = document.createElement('input');
                            hiddenInput.type = 'hidden';
                            hiddenInput.name = `cf_user[${id}]`;
                            hiddenInput.value = data.cf;
                            this.appendChild(hiddenInput);
                        });
                    });
                </script>

                <?php
// Bagian perhitungan CF 

if (isset($_POST['gejala'])) {
    if (count($_POST['gejala']) < 2) {
        echo "<div class='text-center alert alert-danger mt-4'>Pilih minimal 2 gejala untuk dilakukan proses konsultasi.</div>";
    } else {
        // Generate ID konsultasi unik
        $id_konsultasi = uniqid('konsultasi_', true);
        
        // Simpan sesi konsultasi
        $queryKonsultasi = mysqli_query($koneksi, "INSERT INTO tb_konsultasi (id_konsultasi, tanggal_mulai) VALUES ('$id_konsultasi', NOW())");

        echo "
        <div class='mt-4 mb-4 font-weight-bold'>Gejala yang dipilih</div>
        <table class='table table-bordered' width='100%' cellspacing='0'>
        <tr class='bg-primary text-white' align='center'>
        <th width='15%'>Kode Gejala</th>
        <th>Nama Gejala</th>
        </tr>";

        $arrKDGejalaSelect = $_POST['gejala'];
        foreach ($arrKDGejalaSelect as $kdGSelect) {
            echo "<tr><td class='text-center align-middle'>G" . $kdGSelect . "</td>";
            $queryG = mysqli_query($koneksi, "SELECT * FROM tb_gejala WHERE id='$kdGSelect' ");
            while ($dataG = mysqli_fetch_array($queryG)) {
                echo "<td>" . $dataG['gejala'] . "</td></tr>";
            }
        }
        echo "</table>";

        // Ambil data rules untuk gejala yang dipilih
        $sql = "SELECT DISTINCT a.id_penyakit, a.id_gejala, a.cf, b.kd_penyakit, b.nama_penyakit
                FROM tb_rules a
                JOIN tb_penyakit b ON a.id_penyakit = b.id
                WHERE a.id_gejala IN(" . implode(',', $_POST['gejala']) . ") 
                ORDER BY a.id_penyakit, a.id_gejala";

        $result = mysqli_query($koneksi, $sql);
        $rules_data = array();
        $penyakit_data = array();

        while ($row = mysqli_fetch_array($result)) {
            $rules_data[$row['id_penyakit']][] = array(
                'id_gejala' => $row['id_gejala'],
                'cf' => $row['cf']
            );
            $penyakit_data[$row['id_penyakit']] = array(
                'kd_penyakit' => $row['kd_penyakit'],
                'nama_penyakit' => $row['nama_penyakit']
            );
        }

        echo "<div class='mt-4 mb-4 font-weight-bold'>Nilai CF User</div>";
        echo "<table class='table table-bordered' width='100%' cellspacing='0'>";
        echo "<tr class='bg-primary text-white' align='center'>";
        echo "<th width='15%'>Kode Gejala</th>";
        echo "<th>Nama Gejala</th>";
        echo "<th width='15%'>CF User</th>";
        echo "</tr>";

        foreach ($arrKDGejalaSelect as $kdGSelect) {
            $cf_user = isset($_POST['cf_user'][$kdGSelect]) ? $_POST['cf_user'][$kdGSelect] : 0.8;
            echo "<tr>";
            echo "<td class='text-center align-middle'>G" . $kdGSelect . "</td>";
            
            $queryG = mysqli_query($koneksi, "SELECT * FROM tb_gejala WHERE id='$kdGSelect'");
            while ($dataG = mysqli_fetch_array($queryG)) {
                echo "<td>" . $dataG['gejala'] . "</td>";
            }
            echo "<td class='text-center align-middle'>" . $cf_user . "</td>";
            echo "</tr>";
        }
        echo "</table>";

        // Proses perhitungan CF untuk setiap penyakit
        $hasil_diagnosa = array();

        foreach ($rules_data as $id_penyakit => $gejala_rules) {
            $cf_gabungan = 0;
            $cf_lama = 0;
            $count_gejala = 0;
            $cf_combines = array(); // Array untuk menyimpan nilai CF combine tiap gejala

            echo "<div class='card shadow mb-4'>";
            echo "<div class='card-header bg-info text-white'>";
            echo "<h5 class='m-0'><i class='fas fa-calculator'></i> Perhitungan untuk " . $penyakit_data[$id_penyakit]['nama_penyakit'] . " (" . $penyakit_data[$id_penyakit]['kd_penyakit'] . ")</h5>";
            echo "</div>";
            echo "<div class='card-body'>";
            
            // Tabel perhitungan CF individual
            echo "<h6><i class='fas fa-table'></i> Tabel Perhitungan CF</h6>";
            echo "<table class='table table-bordered table-striped' width='100%' cellspacing='0'>";
            echo "<tr class='bg-secondary text-white' align='center'>";
            echo "<th>Gejala</th>";
            echo "<th>CF Expert</th>";
            echo "<th>CF User</th>";
            echo "<th>CF Combine</th>";
            echo "<th>Rumus</th>";
            echo "</tr>";

            foreach ($gejala_rules as $rule) {
                $id_gejala = $rule['id_gejala'];
                $cf_expert = $rule['cf'];

                // Cek apakah gejala ini dipilih user
                if (in_array($id_gejala, $arrKDGejalaSelect)) {
                    $cf_user = isset($_POST['cf_user'][$id_gejala]) ? $_POST['cf_user'][$id_gejala] : 0.8;
                    $cf_combine = $cf_expert * $cf_user;
                    $cf_combines[] = $cf_combine; // Simpan untuk perhitungan kombinasi

                    // Ambil nama gejala
                    $queryGejala = mysqli_query($koneksi, "SELECT gejala FROM tb_gejala WHERE id='$id_gejala'");
                    $dataGejala = mysqli_fetch_array($queryGejala);

                    echo "<tr>";
                    echo "<td>G" . $id_gejala . " - " . $dataGejala['gejala'] . "</td>";
                    echo "<td class='text-center'>" . $cf_expert . "</td>";
                    echo "<td class='text-center'>" . $cf_user . "</td>";
                    echo "<td class='text-center'><strong>" . number_format($cf_combine, 4) . "</strong></td>";
                    echo "<td class='text-center'>" . $cf_expert . " × " . $cf_user . " = " . number_format($cf_combine, 4) . "</td>";
                    echo "</tr>";

                    $count_gejala++;

                    // Simpan detail perhitungan ke database
                    $queryDetail = "INSERT INTO tb_konsultasi_detail (id_konsultasi, id_penyakit, id_gejala, cf_expert, cf_user, cf_combine) 
                                   VALUES ('$id_konsultasi', '$id_penyakit', '$id_gejala', '$cf_expert', '$cf_user', '$cf_combine')";
                    mysqli_query($koneksi, $queryDetail);
                }
            }
            echo "</table>";

            // Jika ada gejala yang sesuai, lakukan perhitungan kombinasi
            if ($count_gejala > 0) {
                echo "<h6><i class='fas fa-calculator'></i> Perhitungan Kombinasi CF</h6>";
                echo "<div class='alert alert-light border'>";
                
                if ($count_gejala == 1) {
                    $cf_gabungan = $cf_combines[0];
                    echo "<p><strong>Hanya 1 gejala, jadi CF gabungan = " . number_format($cf_gabungan, 4) . "</strong></p>";
                } else {
                    // Perhitungan step by step
                    echo "<div class='calculation-steps'>";
                    
                    for ($i = 0; $i < count($cf_combines); $i++) {
                        if ($i == 0) {
                            $cf_gabungan = $cf_combines[0];
                            echo "<p><strong>Step " . ($i + 1) . ":</strong> CF_awal = " . number_format($cf_combines[0], 4) . "</p>";
                        } else {
                            $cf_lama = $cf_gabungan;
                            $cf_baru = $cf_combines[$i];
                            $cf_gabungan = $cf_lama + $cf_baru * (1 - $cf_lama);
                            
                            echo "<p><strong>Step " . ($i + 1) . ":</strong> CF_user × CF_pakar = " . number_format($cf_baru, 4) . "</p>";
                            echo "<p><strong>Kombinasi CF:</strong></p>";
                            echo "<p>CF_awal = " . number_format($cf_lama, 4) . "</p>";
                            echo "<p>CF_kombinasi_" . ($i + 1) . " = " . number_format($cf_lama, 4) . " + " . number_format($cf_baru, 4) . " × (1 - " . number_format($cf_lama, 4) . ")</p>";
                            echo "<p>CF_kombinasi_" . ($i + 1) . " = " . number_format($cf_lama, 4) . " + " . number_format($cf_baru, 4) . " × " . number_format(1 - $cf_lama, 4) . "</p>";
                            echo "<p>CF_kombinasi_" . ($i + 1) . " = " . number_format($cf_lama, 4) . " + " . number_format($cf_baru * (1 - $cf_lama), 4) . "</p>";
                            echo "<p>CF_kombinasi_" . ($i + 1) . " = <strong>" . number_format($cf_gabungan, 4) . "</strong></p>";
                            
                            if ($i < count($cf_combines) - 1) {
                                echo "<hr>";
                            }
                        }
                    }
                    echo "</div>";
                }
                
                echo "</div>";
                
                // Hasil akhir
                echo "<div class='alert alert-success'>";
                echo "<h5><i class='fas fa-check-circle'></i> Hasil Akhir</h5>";
                echo "<p><strong>CF Total untuk " . $penyakit_data[$id_penyakit]['nama_penyakit'] . " = " . number_format($cf_gabungan, 4) . " (" . number_format($cf_gabungan * 100, 2) . "%)</strong></p>";
                echo "</div>";

                // Simpan hasil untuk ranking
                $hasil_diagnosa[$id_penyakit] = array(
                    'nama_penyakit' => $penyakit_data[$id_penyakit]['nama_penyakit'],
                    'kd_penyakit' => $penyakit_data[$id_penyakit]['kd_penyakit'],
                    'cf_gabungan' => $cf_gabungan,
                    'persentase' => $cf_gabungan * 100
                );

                // Update hasil ke database
                $queryHasil = "INSERT INTO tb_konsultasi_hasil (id_konsultasi, id_penyakit, cf_gabungan, persentase) 
                              VALUES ('$id_konsultasi', '$id_penyakit', '$cf_gabungan', '" . ($cf_gabungan * 100) . "')";
                mysqli_query($koneksi, $queryHasil);
            }
            
            echo "</div>";
            echo "</div>";
        }

        // Urutkan hasil berdasarkan CF terbesar
        if (!empty($hasil_diagnosa)) {
            uasort($hasil_diagnosa, function ($a, $b) {
                return $b['cf_gabungan'] <=> $a['cf_gabungan'];
            });

            // Tampilkan hasil diagnosa
            echo "<div class='card shadow mb-4'>";
            echo "<div class='card-header py-3 bg-success text-white'>";
            echo "<h5 class='m-0'><i class='fas fa-diagnoses'></i> Hasil Diagnosa Akhir</h5>";
            echo "</div>";
            echo "<div class='card-body'>";

            $ranking = 1;
            foreach ($hasil_diagnosa as $id_penyakit => $hasil) {
                $confidence_level = "";
                $alert_class = "";
                $icon = "";

                if ($hasil['persentase'] >= 80) {
                    $confidence_level = "Sangat Tinggi";
                    $alert_class = "alert-danger";
                    $icon = "fas fa-exclamation-triangle";
                } elseif ($hasil['persentase'] >= 60) {
                    $confidence_level = "Tinggi";
                    $alert_class = "alert-warning";
                    $icon = "fas fa-exclamation-circle";
                } elseif ($hasil['persentase'] >= 40) {
                    $confidence_level = "Sedang";
                    $alert_class = "alert-info";
                    $icon = "fas fa-info-circle";
                } else {
                    $confidence_level = "Rendah";
                    $alert_class = "alert-secondary";
                    $icon = "fas fa-question-circle";
                }

                echo "<div class='alert $alert_class border-left-primary' role='alert'>";
                echo "<div class='d-flex align-items-center'>";
                echo "<div class='mr-3'><i class='$icon fa-2x'></i></div>";
                echo "<div>";
                echo "<h5 class='alert-heading'><i class='fas fa-medal'></i> Peringkat $ranking</h5>";
                echo "<hr class='my-2'>";
                echo "<p class='mb-1'><strong>Penyakit:</strong> " . $hasil['nama_penyakit'] . " (" . $hasil['kd_penyakit'] . ")</p>";
                echo "<p class='mb-1'><strong>Tingkat Keyakinan:</strong> <span class='badge badge-primary'>" . number_format($hasil['persentase'], 2) . "%</span> ($confidence_level)</p>";
                echo "<p class='mb-0'><strong>Nilai CF:</strong> " . number_format($hasil['cf_gabungan'], 4) . "</p>";
                echo "</div>";
                echo "</div>";
                echo "</div>";

                $ranking++;
            }

            // Ambil penyakit dengan CF tertinggi untuk rekomendasi
            $penyakit_utama = reset($hasil_diagnosa);
            $id_penyakit_utama = array_key_first($hasil_diagnosa);

            // Tampilkan solusi/pengobatan
            $querySolusi = mysqli_query($koneksi, "SELECT * FROM tb_penyakit WHERE id='$id_penyakit_utama'");
            $dataSolusi = mysqli_fetch_array($querySolusi);

            if ($dataSolusi && !empty($dataSolusi['solusi'])) {
                echo "<div class='alert alert-success mt-4'>";
                echo "<h5 class='alert-heading'><i class='fas fa-prescription-bottle-alt'></i> Rekomendasi Pengobatan</h5>";
                echo "<hr>";
                echo "<p><strong>Untuk penyakit " . $penyakit_utama['nama_penyakit'] . ":</strong></p>";
                echo "<p class='mb-0'>" . $dataSolusi['solusi'] . "</p>";
                echo "</div>";
            }

            // Update status konsultasi selesai
            $queryUpdateKonsultasi = "UPDATE tb_konsultasi SET 
                     tanggal_selesai = NOW(), 
                     status = 'selesai',
                     hasil_utama = '{$penyakit_utama['nama_penyakit']}',
                     cf_tertinggi = '{$penyakit_utama['cf_gabungan']}'
                     WHERE id_konsultasi = '$id_konsultasi'";
            mysqli_query($koneksi, $queryUpdateKonsultasi);

            echo "</div>";
            echo "</div>";

            // Tombol untuk konsultasi baru
            echo "<div class='text-center mt-4'>";
            echo "<a href='konsultasi.php' class='btn btn-primary btn-lg'>";
            echo "<i class='fas fa-redo'></i> Konsultasi Baru";
            echo "</a>";
            echo "</div>";

        } else {
            echo "<div class='alert alert-info mt-4'>";
            echo "<h5><i class='fas fa-info-circle'></i> Informasi</h5>";
            echo "Berdasarkan gejala yang dipilih, tidak ditemukan penyakit yang sesuai dalam database. ";
            echo "Silakan konsultasi dengan dokter untuk pemeriksaan lebih lanjut.";
            echo "</div>";
        }
    }
}
?>
            </div>
        </div>
    </div>
</div>

<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Address</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Politeknik Negeri Medan, Medan, Indonesia</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 838-4359-3968</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>klinikgroupvi@gmail.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social rounded-circle" href=""><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social rounded-circle" href=""><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social rounded-circle" href=""><i
                            class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social rounded-circle" href=""><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Services</h5>
                <a class="btn btn-link" href="">Konsultasi Online</a>
                <a class="btn btn-link" href="">Diagnosa Penyakit</a>
                <a class="btn btn-link" href="">Sistem Pakar</a>
                <a class="btn btn-link" href="">Rekomendasi Pengobatan</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Quick Links</h5>
                <a class="btn btn-link" href="index.html">Home</a>
                <a class="btn btn-link" href="about.html">About Us</a>
                <a class="btn btn-link" href="contact.html">Contact Us</a>
                <a class="btn btn-link" href="konsultasi.php">Konsultasi</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Newsletter</h5>
                <p>Subscribe untuk mendapatkan informasi terbaru tentang kesehatan.</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button"
                        class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Subscribe</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Klinik Group VI</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    Designed By <a class="border-bottom" href="#">Group VI</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>