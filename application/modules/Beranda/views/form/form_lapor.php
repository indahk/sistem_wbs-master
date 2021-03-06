    <!-- ======= Contact Section ======= -->

    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Lapor</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
                    in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="icofont-google-map"></i>
                            <h4>Location:</h4>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>

                        <div class="email">
                            <i class="icofont-envelope"></i>
                            <h4>Email:</h4>
                            <p>info@example.com</p>
                        </div>

                        <div class="phone">
                            <i class="icofont-phone"></i>
                            <h4>Call:</h4>
                            <p>+1 5589 55488 55s</p>
                        </div>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                    </div>

                </div>

                <div class="col-lg-6 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="form-group">
                            <label for="name">Nama Pelapor</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama Anda">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">No.Tlpn</label>
                                <input type="text" class="form-control" name="no_tlpn" placeholder="No.tlpn">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Judul Lapor</label>
                            <input type="text" class="form-control" name="judul_laporan" placeholder="Judul Lapor Anda">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Kategori Lapor</label>
                                <select name='kategori' class="form-control" name="kt_lapor" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                                    <option value='islam'>Wisuda</option>
                                    <option value='kristen'>Kemahasiswaan</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Kategori Pelapor</label>
                                <select name='kategori' class="form-control" name="kt_pelapor" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                                    <option value='islam'>Dosen PCR</option>
                                    <option value='kristen'>Mahasiswa PCR</option>
                                </select>
                                </select>
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="name">Isi Lapor</label>
                            <textarea class="form-control" name="isi_laporan" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                            <div class="validate"></div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Lampiran</label>
                                <input type="file" class="form-control" name="lampiran" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign in</button>


                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->