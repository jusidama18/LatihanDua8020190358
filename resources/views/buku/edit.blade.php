<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    </head>
    <body>
        <div class="modal-body">
            <form action="/buku/{{ $data->id }}/update"method=POST>
                {{ csrf_field() }}
                <div class="col-md-3 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
                    <input name="judul" type="text" value="{{ $data->judul }}" class="form-control" id="judul" aria-describedby="emailHelp" placeholder="Masukkan Judul Buku...">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nama Pengarang</label>
                    <input name= "pengarang" type="text" value="{{ $data -> pengarang }}" class="form-control" id="pengarang" placeholder="Masukkan Nama Pengarang...">
                </div>
                <button type="submit" class="btn btn-danger">Perbarui Data</button>
                <div class="col-md-3 mb-3 form-check">
                </div>
              </form>
        </div>
        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>