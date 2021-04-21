  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Saran</h2>s


          
          <p>Isi data diri anda dan Lapor pada form berikut !</p>
        </div>

        

          <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              
                <div class="form-group col-md-6">
                  <label for="name">Pengirim</label>
                  <input type="text" name="name" placeholder="Masukan nama anda" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Email</label>
                  <input type="email" class="form-control" placeholder="Masukan email anda" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Telepon</label>
                  <input type="email" class="form-control" placeholder="Isi No Telephon / HP" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Judul Aspirasi</label>
                  <input type="judul" class="form-control" placeholder="Isi No Telephon / HP" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Kategori Pengirim</label>
                    <select name='kategori'class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <option value='islam'>Dosen PCR</option>
                        <option value='kristen'>Tendik PCR</option>
                        <option value='katholik'>Mahasiswa PCR</option>
                        <option value='hindu'>Alumni PCR</option>Contact
                        <option value='kristen'>Orang Tua</option>
                        <option value='kristen'>Umum</option>
                    </select><div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Kategori Aspirasi</label>
                    <select name='kategori'class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <option value='islam'>Wisuda</option>
                        <option value='kristen'>Kemahasiswaan</option>
                    </select><div class="validate"></div>
                </div>
              
              
              <div class="form-group col-md-12">
                <label for="name">Isi</label>
                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
              <div class="form-group col-md-6">
                <label for="name">Lampran</label>
                <input type="file" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Saran anda telah terkirim</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->