<form class="form-horizontal" role="form" enctype="multipart/form-data" method="post" action="../proses_upload_ebook.php" style="margin-top:5px;border-top:2px solid #ddd;padding:10px;">
        <div class="form-group">
        <label class="col-sm-2 control-label" for="judul">
        Judul Ebook
        </label>
        <div class="col-sm-8">
        <input type="text" class="form-control has-success" id="judul" name="judul" required="required" placeholder="Masukan Judul ebook">
        </div>
        </div><!--akhir judul-->
        
        <div class="form-group">
        <label class="col-sm-2 control-label" for="isifile">
        Pilih Ebook
        </label>
        <div class="col-sm-8">
        <input type="file" id="file" name="file" required />
        <p class="help-block">Ukuran Ebook Maksimal 25Mb</p>
        </div>
        </div><!--akhir isi file-->
        
        <div class="form-group">
                	<label for="Fakultas" class="col-sm-2 control-label">Kategori </label>
                    <div class="col-sm-8">
                    <select class="form-control" id="kategori" name="kategori" required="required">
                    <option>-----Pilih-----</option>
                    <optgroup label="FTMIPA">
                    <option value="Informatika">Informatika</option>
                    <option value="Arsitektur">Arsitektur</option>
                    <option value="Industri">Industri</option>
                    <option value="Matematika">Matematika</option>
                    </optgroup>
                    <optgroup label="FIPPS">
                    <option value="Konseling">Konseling</option>
                    <option value="Ekonomi">Ekonomi</option>
                    <option value="IPS">IPS</option>
                    </optgroup>
                    <optgroup label="FBS">
                    <option value="Sastra">Sastra</option>
                    <option value="Inggris">Inggris</option>
                    <option value="DKV">DKV</option>
                    </optgroup>
                    
                    </select>
                    </div>
                    </div><!--akhir kategori-->
        
        <div class="form-group">
        <label class="col-sm-2 control-label" for="judul">
        Deskripsi
        </label>
        <div class="col-sm-8">
        <textarea class="form-control" rows="3" placeholder="deskripsikan ebook agar mudah dikenali" name="deskripsi"></textarea>
        </div>
        </div><!--akhir deskripsi-->
        
        <button type="submit" class="btn btn-primary" name="upload"><strong>Upload</strong></button>
        </form>
        