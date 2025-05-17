<div class="mb-3">
    <label>Judul</label>
    <input type="text" name="judul" value="{{ old('judul', $buku->judul ?? '') }}" class="form-control">
</div>
<div class="mb-3">
    <label>Penulis</label>
    <input type="text" name="penulis" value="{{ old('penulis', $buku->penulis ?? '') }}" class="form-control">
</div>
<div class="mb-3">
    <label>Penerbit</label>
    <input type="text" name="penerbit" value="{{ old('penerbit', $buku->penerbit ?? '') }}" class="form-control">
</div>
<div class="mb-3">
    <label>Tahun Terbit</label>
    <input type="number" name="tahun_terbit" value="{{ old('tahun_terbit', $buku->tahun_terbit ?? '') }}" class="form-control">
</div>
