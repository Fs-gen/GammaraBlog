<!-- <footer></footer> -->
<div class="bg-dark text-white w-100 pt-5 px-5 pb-2">
    <div class="row">
        <div class="col-md-12 text-center">
            <!-- <h3>Tentang</h3> -->
            <img class="mr-3 my-3" src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Kementerian_Agama_new_logo.png" width="100" alt="" srcset="">
            <h5 class="font-weight-bolder">
                Balai Nikah Dan Manasik Haji Kantor Urusan Agama Kec. Cenrana Kab. Maros
            </h5>
            <p class="my-4">Alamat : Jl. Poros Maros-Bone KM. 36. WT Bengo</p>
        </div>
        <div class="w-100">
            <hr>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-md-4 text-left">
            <h3>Kontak</h3>
            <hr>
            Suwarni ( 0852-4216-7546 )
            <br>Sukaena ( 0853-9788-5701 )
            <br>Faisal ( 0852-5579-7797 )
            <br><br>
        </div>
        <div class="col-md-8">
            <h3 class="text-left">Peta Lokasi</h3>
            <hr>
            <div class="iframe-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d993.661118965609!2d119.77255422667554!3d-4.998579696371454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbef5391f379671%3A0x3a117daef38beed9!2sKUA%20Kecamatan%20Cenrana!5e0!3m2!1sid!2sid!4v1610681423977!5m2!1sid!2sid" width="600" height="150" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
    <div class="w-100 mt-5">
        <small>&copy; KUA Cenrana Maros 2021</small>
    </div>
</div>
</div>

<!-- MODAL -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pilih Kategori: </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" placeholder="Ketik Nama Anda" id="nama">
                    <br>
                    <label for="categori">Pelayanan Online</label>
                    <select name="category" id="formWA" class="form-control">
                        <option value="Bimbingan%20Perkawinan+Online">Bimbingan Perkawinan</option>
                        <option value="Melakukan+Pengaduan+Online">Pengaduan</option>
                        <option value="Tanya%20Jawab+Online">Tanya Jawab</option>
                    </select>

                </form>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                <button onclick="sendWA()" class="btn btn-outline-success">Lanjut</button>
            </div>
        </div>
    </div>
</div>


<a href="#" class="float" data-toggle="modal" data-target="#exampleModal">
    <i class="fab fa-whatsapp my-float"></i>
    <!-- <i class="fab fa-whatsapp"></i> -->
</a>
<!-- Optional JavaScript; choose one of the two! -->
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/') ?>js/Chart.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<script src="<?= base_url('assets/') ?>js/app.js"></script>
<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>