//fungsi konfirmasi hapus without Jquery
const tombolHapus = document.querySelectorAll('.tombol-hapus');

tombolHapus.forEach(tbl => {
    tbl.addEventListener('click', function(e) {
        var form =  this.closest("form");

        e.preventDefault();
        Swal.fire({
            title: 'Apakah Anda Yakin ?',
            text: "Data yang Anda hapus tidak dapat di Recovery !",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Saya yakin !'
        }).then((willDelete) => {
            if (willDelete.value) {
                form.submit();
            }
        });
    });
});
