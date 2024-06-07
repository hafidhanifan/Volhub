@include('admin.layout.templates.header')
@include('admin.layout.templates.sidebar')
@include('admin.layout.templates.navbar')

<section class="section">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title">
                  <h2>Project Volunteering</h2>
                </div>
                <a
                  href="{{ route('admin.add-kegiatan-page') }}"
                  class="main-btn dark-btn btn-hover"
                >
                  <i class="lni lni-plus mr-5"></i>Tambah Project</a
                >
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== title-wrapper end ========== -->
          <div class="cards-styles">
            <!-- ========= card-style-2 start ========= -->
            <div class="row">
              <div class="col-12">
                <div class="title mt-30 mb-30"></div>
              </div>
              <!-- end col -->
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="card-style-2 mb-30">
                  <div class="card-image">
                    <a href="#0">
                      <img src="assets/images/program-3.jpg" alt="" />
                    </a>
                  </div>
                  <div class="card-content">
                    <h4>
                      <a href="#0">Penanaman Hutan Mangrove di Pantai Baru</a>
                    </h4>
                    <div
                      class="card-content-location d-flex align-items-center fw-bold text-dark"
                    >
                      <i class="lni lni-map-marker"></i
                      ><span class="ms-3">Kab. Bantul, Yogyakarta</span>
                    </div>
                    <ul
                      class="d-flex flex-wrap align-items-center justify-content-between mt-25"
                    >
                      <li>
                        <a
                          href="#0"
                          id="detailProject"
                          class="main-btn primary-btn btn-hover"
                        >
                          Detail
                        </a>
                      </li>
                      <li>
                        <button id="deleteProject">
                          <i class="lni lni-trash-can text-danger"></i>
                        </button>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- end col -->
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="card-style-2 mb-30">
                  <div class="card-image">
                    <a href="#0">
                      <img src="assets/images/program-3.jpg" alt="" />
                    </a>
                  </div>
                  <div class="card-content">
                    <h4>
                      <a href="#0">Penanaman Hutan Mangrove di Pantai Baru</a>
                    </h4>
                    <div
                      class="card-content-location d-flex align-items-center fw-bold text-dark"
                    >
                      <i class="lni lni-map-marker"></i
                      ><span class="ms-3">Kab. Bantul, Yogyakarta</span>
                    </div>
                    <ul
                      class="d-flex flex-wrap align-items-center justify-content-between mt-25"
                    >
                      <li>
                        <a
                          href="#0"
                          id="detailProject"
                          class="main-btn primary-btn btn-hover"
                        >
                          Detail
                        </a>
                      </li>
                      <li>
                        <button id="deleteProject">
                          <i class="lni lni-trash-can text-danger"></i>
                        </button>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- end col -->
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="card-style-2 mb-30">
                  <div class="card-image">
                    <a href="#0">
                      <img src="assets/images/program-3.jpg" alt="" />
                    </a>
                  </div>
                  <div class="card-content">
                    <h4>
                      <a href="#0">Penanaman Hutan Mangrove di Pantai Baru</a>
                    </h4>
                    <div
                      class="card-content-location d-flex align-items-center fw-bold text-dark"
                    >
                      <i class="lni lni-map-marker"></i
                      ><span class="ms-3">Kab. Bantul, Yogyakarta</span>
                    </div>
                    <ul
                      class="d-flex flex-wrap align-items-center justify-content-between mt-25"
                    >
                      <li>
                        <a
                          href="#0"
                          id="detailProject"
                          class="main-btn primary-btn btn-hover"
                        >
                          Detail
                        </a>
                      </li>
                      <li>
                        <button id="deleteProject">
                          <i class="lni lni-trash-can text-danger"></i>
                        </button>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
            <!-- ========= card-style-2 end ========= -->
          </div>
        </div>
        <!-- end container -->
      </section>
@include('admin.layout.templates.footer')
