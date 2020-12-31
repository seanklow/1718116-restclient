<h1 class="h3 mb-4 text-gray-800 text-center text-primary"><strong>Tipe Barang</strong></h1>
<br><br><br>
<button type="button" class="btn btn-info btn-lg create" data-toggle="modal" data-target="#exampleModalCenterMsj"><i class="fa fa-table mr-3"></i>Tambah Data</button>
<br>
<br>
<br>
<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">id tipe barang</th>
            <th scope="col">rasa liquid</th>
            <th scope="col">tahun pembuatan</th>
            <th scope="col">nama merk</th>
        </tr>
    </thead>
    <tbody id="table_tipebarang">

    </tbody>
</table>
<div class="modal fade" id="exampleModalCenterMsj" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formMsjadz">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Pilih Liquid</label>
                        <select class="form-control inputUst" name="id_ust">

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">ID Tipe Liquid</label>
                        <input type="text" class="form-control" name="createNama" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Rasa Liquid</label>
                        <input type="text" class="form-control" name="createAlamat" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Tahun Pembuatan</label>
                        <input type="text" class="form-control" name="createNama" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Merk</label>
                        <input type="text" class="form-control" name="createNama" id="exampleFormControlInput1" placeholder="">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary addMsj" data-dismiss="modal">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="updateModalCenterMsj" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formMsjadz">
                    <input type="hidden" name="id">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Pilih Liquid</label>
                        <select class="form-control inputUpUst" name="update_id_ust">

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Tanggal</label>
                        <input type="date" class="form-control" name="updateTanggal" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Waktu Mulai</label>
                        <input type="time" class="form-control" name="updateMulai" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Waktu Selesai</label>
                        <input type="time" class="form-control" name="updateSelesai" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Masjid</label>
                        <input type="text" class="form-control" name="updateNama" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Alamat Masjid</label>
                        <input type="text" class="form-control" name="updateAlamat" id="exampleFormControlInput1" placeholder="">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary updateMsj" data-dismiss="modal">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>