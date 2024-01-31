<?php
include_once("config/koneksi.php");
$result = mysqli_query($mysqli, "SELECT * FROM tb_detail_jual ");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css"
    />
    <link rel="stylesheet" href="css/data.css">
    <!-- ICONS -->
    <link rel="stylesheet" href="fontawesome/css/all.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
  </head>
  <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-secondary mb-3">
      <div class="container">
        <lord-icon
          src="https://cdn.lordicon.com/vufjamqa.json"
          trigger="hover"
          colors="primary:#121331"
          style="width: 25px; height: 25px"
        >
        </lord-icon>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarText"
          aria-controls="navbarText"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="dashboard"
                >Dashboard</a
              >
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="template"
                >Template</a
              >
            </li> -->
          </ul>
          <div class="btn-group">
            <button class="btn btn-secondary btn-sm" type="button">
              <lord-icon
                src="https://cdn.lordicon.com/bhfjfgqz.json"
                trigger="hover"
                colors="primary:#121331"
                style="width: 25px; height: 25px"
              >
              </lord-icon>
            </button>
            <button
              type="button"
              class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              <span class="visually-hidden">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu">
              <!-- PROFILE-DROPDOWN -->
              <li>
                <a class="dropdown-item" href="#">
                  <div class="row">
                    <div class="col-3">
                      <lord-icon
                        src="https://cdn.lordicon.com/bhfjfgqz.json"
                        trigger="hover"
                        colors="primary:#121331"
                        style="width: 25px; height: 25px"
                      >
                      </lord-icon>
                    </div>
                    <div class="col">
                      <p>Profile</p>
                    </div>
                  </div>
                </a>
              </li>
              <!-- SETTING-DROPDOWN -->
              <li>
                <a class="dropdown-item" href="#">
                  <div class="row">
                    <div class="col-3">
                      <lord-icon
                        src="https://cdn.lordicon.com/hwuyodym.json"
                        trigger="hover"
                        colors="primary:#121331"
                        style="width: 25px; height: 25px"
                      >
                      </lord-icon>
                    </div>
                    <div class="col">
                      <p>Settings</p>
                    </div>
                  </div>
                </a>
              </li>
              <!-- LOGOUT DROPDOWN -->
              <li>
                <a class="dropdown-item" href="/">
                  <div class="row">
                    <div class="col-3">
                      <lord-icon
                        src="https://cdn.lordicon.com/zmkotitn.json"
                        trigger="hover"
                        colors="primary:#121331"
                        state="hover-3"
                        style="width: 25px; height: 25px"
                      >
                      </lord-icon>
                    </div>
                    <div class="col">
                      <p>Logout</p>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb ps-3 fs-6">
              <li class="breadcrumb-item">
                <a class="text-decoration-none" href="index.php">Data Barang</a>
              </li>
              <li class="breadcrumb-item">
                <a class="text-decoration-none" href="data_penjualan.php">Data Penjualan</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Data Detail Penjualan
              </li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <div class="row mb-2">
            <div class="col">
              <label class="fw-bold mb-3">Data Detail Penjualan</label>
            </div>
            <div class="add col">
              <button
                type="button"
                class="btn btn-success float-end"
                data-bs-toggle="modal"
                data-bs-target="#staticBackdrop"
                href=""
              >
                Add New
</button>
            </div>
          </div>
          <!-- Modal -->
          <div
            class="modal fade"
            id="staticBackdrop"
            data-bs-backdrop="static"
            data-bs-keyboard="false"
            tabindex="-1"
            aria-labelledby="staticBackdropLabel"
            aria-hidden="true"
          >
            <div class="modal-dialog modal-dialog-centered modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="staticBackdropLabel">
                    Modal title
                  </h1>
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  ></button>
                </div>
                <!-- MODAL BODY -->
                <div class="modal-body">
                  <div class="container">
                    <form action="" method="post" name="form1">
                    <div class="row">
                      <!-- COL KIRI MODAL-BODY -->
                      <div class="col">
                      <div class="input mb-2">
                          <label for="biodata" class="col-form-label"
                            >KODE PENJUALAN</label
                          >
                          <input
                            name="kode_barang"
                            type="text"
                            for="biodata"
                            class="form-control"
                            placeholder="Input kode barang"
                          />
                        </div>
                        <div class="input mb-2">
                          <label for="biodata" class="col-form-label"
                            >TANGGAL JUAL</label
                          >
                          <input
                            name="stok"
                            type="number"
                            for="biodata"
                            class="form-control"
                            placeholder="Input stok"
                          />
                        </div>
                        <div class="input mb-2">
                          <label for="biodata" class="col-form-label"
                            >HARGA</label
                          >
                          <input
                            name="harga"
                            type="text"
                            for="biodata"
                            class="form-control"
                            placeholder="Rp. 0.000,00"
                          />
                        </div>
                      </div>
                      <!-- COL KANAN MODAL-BODY -->
                      <div class="col">
                        
                        <div class="input mb-2">
                          <label for="biodata" class="col-form-label"
                            >NAMA BARANG</label
                          >
                          <input
                            name="nama_barang"
                            type="text"
                            for="biodata"
                            class="form-control"
                            placeholder="Input nama barang"
                          />
                        </div>
                      </div>
                      <!-- END COL KANAN MODAL-BODY -->
                      <div class="modal-footer">
                  <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal"
                  >
                    Close
                  </button>
                  <input type="submit" value="Add" name="Submit" class="btn btn-primary">
                </div>
                    </div>
                    </form>
                    <?php
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$kode_barang = $_POST['kode_barang'];
		$stok = $_POST['stok'];
		$harga = $_POST['harga'];
		$nama_barang = $_POST['nama_barang'];
		
		// include database connection file
		include_once("config/koneksi.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO tb_barang(kode_barang, stok, harga, nama_barang) VALUES ('$kode_barang','$stok','$harga','$nama_barang')");
		
		// Show message when user added
		// echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
                  </div>
                </div>
                <!-- END MODAL BODY -->
                
              </div>
            </div>
          </div>
          <?php
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$kode_barang = $_POST['kode_barang'];
		$nama_barang = $_POST['nama_barang'];
		$stok = $_POST['stok'];
		
		// include database connection file
		include_once("config/koneksi.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO tb_barang (kode_barang,stok,nama_barang,harga) VALUES('$kode_barang','$stok','$nama_barang','$harga')");
		
		// Show message when user added
		// echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
          <table class="table table-bordered" id="">
            <thead>
              <tr class="text-center">
                <th>KODE PENJUALAN</th>
                <th>KODE BARANG</th>
                <th>JUMLAH JUAL</th>
                <th>SUB TOTAL HARGA</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['kode_penjualan']."</td>";
        echo "<td>".$user_data['kode_barang']."</td>";    
        echo "<td>".$user_data['jumlah_jual']."</td>";
        echo "<td>".$user_data['sub_total_harga']."</td>";

        echo "<td><a href='edit.php?kode_penjualan=$user_data[kode_penjualan]'>Edit</a> | <a href='delete.php?kode_penjualan=$user_data[kode_penjualan]'>Delete</a></td></tr>";                
    }
    ?>  
                <!-- <td>
                  <div class="dropdown-center d-flex justify-content-center">
                    <button
                      class="btn btn-transparent dropdown-toggle text-success"
                      type="button"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      Option
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="detail"
                          ><i class="bi bi-person-lines-fill me-1 px-2"></i>
                          Detail</a
                        >
                      </li>
                      <li>
                        <a class="dropdown-item text-danger" href="#"
                          ><i class="bi bi-trash3-fill me-2 px-2"></i>Delete</a
                        >
                      </li>
                    </ul>
                  </div>
                </td> -->
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
      new DataTable("#example");
    </script>
    <script src="asset/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
  </body>
</html>