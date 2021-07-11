<!-- ======= Contact Section ======= -->
<section id                     = "aspirasi" class="contact">
  <div class                    = "container" data-aos="fade-up">
    <div class                  = "section-title">
      <h2>Aspirasi</h2>
      <p>Form Aspirasi</p>
    </div>

    <div class                  = "col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
      <form action              = "<?= base_url('Pelapor/add') ?>" method="post" role="form" class="php-email-form">
        <div class              = "form-group">
          <label for            = "inputAddress">Nama Pelapor</label>
          <input type           = "text" class="form-control" name="nama_pelapor" id="inputAddress" placeholder="Nama Anda">
        </div>
         <div class              = "form-row">
          <div class            = "form-group col-md-6">                                                                                                                                                                                                                                                             
            <label for          = "inputEmail4">Email</label>
            <input type         = "email" class="form-control"  name="email_pelapor" id="inputEmail4" placeholder="Email">
          </div>
          <div class            = "form-group col-md-6">
            <label for          = "inputPassword4">No.Tlpn</label>
            <input type         = "text" class="form-control" name="nohp_pelapor"  placeholder="No.tlpn">
          </div>
        </div> 
        <div class              = "form-group">
          <label for            = "inputAddress">Judul Aspirasi</label>
          <input type           = "text" class="form-control" name="judul_aspirasi" id="inputAddress" placeholder="Judul Aspirasi Anda">
        </div> 
 
        <div class              = "form-row">
          <div class            = "form-group col-md-6">
            <label for          = "name">Kategori Aspirasi</label>

            <select name        = 'kat_masukan' class="form-control" name="kat_aspirasi" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
              <?php foreach ($data as $kat_masukan) { ?>
                <option value   = "<?php echo $kat_masukan['id_ktgmasukan']; ?>"><?php echo $kat_masukan['nama_ktgmasukan']; ?> </option>
              <?php } ?>
            </select>

          </div> 
           <div class            = "form-group col-md-6">
            <label for          = "name">Kategori Pelapor</label>
            <select name        = 'ktg_pelapor' class="form-control" name="ktg_pelapor" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
              <option value     = 'Dosen PCR'>Dosen PCR</option>
              <option value     = 'Tendik PCR'>Tendik PCR</option>
              <option value     = 'Mahasiswa PCR'>Mahasiswa PCR</option>
              <option value     = 'Alumni PCR'>Alumni PCR</option>
              <option value     = 'Ortu Mahasiswa PCR'>Ortu Mahasiswa PCR</option>
              <option value     = 'Umum'>Umum</option>
            </select>
            </select>
          </div> 

        </div>
 
        <div class              = "form-group">
          <label for            = "name">Isi Aspirasi</label>
          <textarea class       = "form-control" name="isi_aspirasi" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
          <div class            = "validate"></div>
        </div>

        <div class              = "form-row">
          <div class            = "form-group col-md-6">
            <label for          = "name">Lampiran</label>
            <input type         = "file" class="form-control" name="lampiran" id="isi_aspirasi" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class          = "validate"></div>
          </div>
        </div> 
        <button type = "submit" class="btn btn-primary">Kirim</button>


      </form>
    </div>
                <!-- <a href="bagian/show">Show</a> -->
  </div>

  </div>
  
</section><!-- End Contact Section -->



 