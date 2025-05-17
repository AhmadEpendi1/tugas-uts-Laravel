import './bootstrap';


document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');

    if (form) {
        form.addEventListener('submit', function (event) {
            const judul = document.querySelector('input[name="judul"]').value.trim();
            const penulis = document.querySelector('input[name="penulis"]').value.trim();
            const penerbit = document.querySelector('input[name="penerbit"]').value.trim();
            const tahun_terbit = document.querySelector('input[name="tahun_terbit"]').value.trim();

            if (!judul || !penulis || !penerbit || !tahun_terbit) {
                event.preventDefault();
                alert('Semua colum harus diisi!');
                return;
            }

            const konfirmasi = confirm("Apakah kamu yakin ingin menyimpan data ini?");
            if (!konfirmasi) {
                event.preventDefault();
            }
        });
    }
});
