<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 style="text-align: center;">[ Daftar Buku Juan ]</h1>
                </div>
                <br>
                <div class="col-6">
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Pengisian Data Buku</h5>
                            </div>
                            <div class="modal-body">
                                <form action="/buku/create"method=POST>
                                    {{ csrf_field() }}
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
                                        <input name="judul" type="text" class="form-control" id="judul" aria-describedby="emailHelp" placeholder="Masukkan Judul Buku...">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Nama Pengarang</label>
                                        <input name= "pengarang" type="text" class="form-control" id="pengarang" placeholder="Masukkan Nama Pengarang...">
                                    </div>
                                    <div class="mb-3 form-check"></div>
                                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                                  </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Tutup</button>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>

                <table class="table table-hover table-bordered" style="width:80%;margin:auto;">
                  <thead class="thead-dark">
                    <tr>
                        <th scope="col" style="text-align: center">Judul</th>
                        <th scope="col" style="text-align: center">Nama Pengarang</th>
                        <th scope="col" style="text-align: center">Tanggal Dibuat</th>
                        <th scope="col" style="text-align: center">Terakhir Diubah</th>
                        <th scope="col" style="text-align: center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data_buku as $data)
                    <tr>
                        <td>
                            {{ $data -> judul }}
                        </td>
                        <td>
                            {{ $data -> pengarang }}
                        </td>
                        <td>
                            {{ $data -> created_at }}
                        </td>
                        <td>
                            {{ $data -> updated_at }}
                        </td>
                        <td style="text-align: center">
                            <a href="/buku/{{$data->id}}/edit" class="btn btn-success">Ubah</a>
                            <a href="/buku/{{$data->id}}/delete" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>

            </div>

        </div>
        <br>
        <button type="button" class="btn btn-primary" style="display: block;margin:auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambahkan Buku
          </button>

        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>