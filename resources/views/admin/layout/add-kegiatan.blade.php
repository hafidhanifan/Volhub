@include('admin.layout.templates.header')
@include('admin.layout.templates.sidebar')
@include('admin.layout.templates.navbar')  
      <!-- ========== section start ========== -->
      <section class="section">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title">
                  <h2>Tambah Project Volunteer</h2>
                </div>
              </div>
              <!-- end col -->
              <div class="col-md-6">
                <div class="breadcrumb-wrapper">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="#0">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">
                        Page
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== title-wrapper end ========== -->
          <!-- ========== form-elements-wrapper start ========== -->
          <div class="form-elements-wrapper">
            <div class="row">
              <div class="col-lg-6">
                <!-- input style start -->
                <div class="card-style mb-30">
                  <div class="input-style-1">
                    <label>Nama Kegiatan</label>
                    <input type="text"/>
                  </div>
                  <!-- end input -->
                  <div class="select-style-1">
                    <label>Kategori</label>
                    <div class="select-position">
                      <select>
                        <option value="">Pilih Kategori</option>
                        <option value="">Pendidikan</option>
                        <option value="">Kesehatan</option>
                      </select>
                    </div>
                  </div>
                  <!-- end input -->
                  <div class="select-style-1">
                    <label>Sistem Kerja</label>
                    <div class="select-position">
                      <select>
                        <option value="">Pilih Sistem Kerja</option>
                        <option value="">Online</option>
                        <option value="">Offline</option>
                      </select>
                    </div>
                  </div>
                  <!-- end input -->
                  <div class="input-style-1">
                    <label>Tanggal Penutupan</label>
                    <input type="date" />
                  </div>
                  <!-- end input -->
                  <div class="input-style-1">
                    <label>Tanggal Kegiatan</label>
                    <input type="date"/>
                  </div>
                  <!-- end input -->
                  <div class="input-style-1">
                    <label>Lama Kegiatan</label>
                    <input type="text"/>
                  </div>
                  <!-- end input -->
                  <div class="input-style-1">
                    <label>Lokasi</label>
                    <input type="text"/>
                  </div>
                  <!-- end input -->
                  <div class="input-style-1">
                    <label>Upload Gambar</label>
                    <input type="text"/>
                  </div>
                  <!-- end input -->
                </div>
                <!-- end card -->
                <!-- ======= input style end ======= -->

                <!-- ======= textarea style start ======= -->
                <div class="card-style mb-30">
                    <div class="input-style-1">
                      <label>Deskripsi</label>
                      <textarea rows="5"></textarea>
                    </div>
                    <!-- end textarea -->
                </div>
                <!-- ======= textarea style end ======= -->


                
              </div>
              <!-- end col -->
              <div class="col-lg-6">


                <!-- input style start -->
                <div class="card-style mb-30">
                    <div class="input-style-1">
                      <label>Kriteria</label>
                      <input type="text" />
                    </div>
                    <!-- end input -->
                    <div class="input-style-1">
                      <input type="text"/>
                    </div>
                    <!-- end input -->
                    <div class="input-style-1">
                      <input type="text"/>
                    </div>
                    <!-- end input -->
                    <div class="input-style-1">
                      <input type="text"/>
                    </div>
                    <!-- end input -->
                    <div class="input-style-1">
                      <input type="text"/>
                    </div>
                    <!-- end input -->  
                </div>
                <!-- end card -->
                <!-- ======= input style end ======= -->

                <!-- input style start -->
                <div class="card-style mb-30">
                    <div class="input-style-1">
                      <label>Benefit</label>
                      <input type="text"/>
                    </div>
                    <!-- end input -->
                    <div class="input-style-1">
                      <input type="text"/>
                    </div>
                    <!-- end input -->
                    <div class="input-style-1">
                      <input type="text"/>
                    </div>
                    <!-- end input -->
                    <div class="input-style-1">
                      <input type="text"/>
                    </div>
                    <!-- end input -->
                    <div class="input-style-1">
                      <input type="text"/>
                    </div>
                    <!-- end input -->  
                </div>
                <!-- end card -->
                <!-- ======= input style end ======= -->

              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== form-elements-wrapper end ========== -->




        </div>
        <!-- end container -->
      </section>
      <!-- ========== section end ========== -->
      @include('admin.layout.templates.footer')