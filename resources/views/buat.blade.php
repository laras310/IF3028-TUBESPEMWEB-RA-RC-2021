@extends ('layout/main')
@section ('container')
        <div class="container">
            <header>
                <h1 class="title">SIMPLE LAPOR!</h1>
            </header>
            <div class="laporan">
                Buat Laporan/Komentar<br>
            <hr>
            <br>
                <!-- <div class="teks"> -->
                    <input type="text" name="nama" class="teks" placeholder="Nama Pelapor"><br><br>
                    <input type="text" name="judul" class="teks" placeholder="Judul Laporan/Komentar"><br><br>
                    <textarea class="komen" rows="20" cols="110" placeholder="Laporan/Komentar"></textarea>
                    <br><br>
                <!-- </div> -->
                
                <div class="custom-select">
                    <select>
                        <option hidden>Pilih Aspek Pelaporan/Komentar</option>
                        <option value="Dosen">Dosen</option>
                        <option value="Staff">Staff</option>
                        <option value="Mahasiswa">Mahasiswa</option>
                        <option value="Infrastruktur">Infrastruktur</option>
                        <option value="Pengajaran">Pengajaran</option> 
                    </select>
                </div>
                <br>
                <form action="google.com">
                    <input type="file" multiple><br><br>
                    <button type="submit" class="submit">Buat LAPOR!</button>
                </form>
                <br><br><br><br><hr><br>
            </div>
        </div>
 @endsection

    