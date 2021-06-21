    <!-- ======= Contact Section ======= -->

    <section id                                 = "contact" class="contact">
    <div class                                  = "container" data-aos="fade-up">

        <div class                              = "section-title">
            <h2>Saran</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
                in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class                              = "col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action                        = "<?= base_url('forms/contact.php')?>" method="post" role="form" class="php-email-form">
                <div class                      = "form-group">
                    <label for                  = "inputAddress">Nama Pelapor</label>
                    <input type                 = "text" class="form-control" id="inputAddress" placeholder="Nama Anda">
                </div>
                <div class                      = "form-row">
                    <div class                  = "form-group col-md-6">
                        <label for              = "inputEmail4">Email</label>
                        <input type             = "email" class="form-control" id="inputEmail4" placeholder="Email">
                    </div>
                    <div class                  = "form-group col-md-6">
                        <label for              = "inputPassword4">No.Tlpn</label>
                        <input type             = "text" class="form-control" id="inputPassword4" placeholder="No.tlpn">
                    </div>
                </div>
                <div class                      = "form-group">
                    <label for                  = "inputAddress">Judul Aspirasi</label>
                    <input type                 = "text" class="form-control" id="inputAddress" placeholder="Judul Aspirasi Anda">
                </div>
    
                <div class                      = "form-row">
                    <div class                  = "form-group col-md-6">
        <label for                              = "name">Kategori Aspirasi</label>
              <select name                      = 'kategori'class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                  <option value                 = 'islam'>Wisuda</option>
                  <option value                 = 'kristen'>Kemahasiswaan</option>
              </select>
                    </div>
                    <div class                  = "form-group col-md-6">
        <label for                              = "name">Kategori Pelapor</label>
              <select name                      = 'kategori'class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                  <option value                 = 'islam'>Dosen PCR</option>
                  <option value                 = 'kristen'>Mahasiswa PCR</option>
              </select>
                        </select>
                    </div>
            
                </div>

      <div class                                = "form-group">
          <label for                            = "name">Isi Aspirasi</label>
          <textarea class                       = "form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
          <div class                            = "validate"></div>
        </div>

    <div class                                  = "form-row">
      <div class                                = "form-group col-md-6">
          <label for                            = "name">Lampiran</label>
          <input type                           = "file" class="form-control" name="subject" id="isi_aspirasi" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
          <div class                            = "validate"></div>
        </div>
    </div>
                <button type                    = "submit" class="btn btn-primary">Sign in</button>


            </form>
        </div>

    </div>

    </div>
</section><!-- End Contact Section -->
