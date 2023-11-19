
$(document).ready(function(){
    $('.navbar-open-btn').click(function(){
        $('.navigation-sidebar').addClass('show-navigation-sidebar');
        $('.navigation-overlay').css('display', 'block');
    })

    $('.navbar-close-btn').click(function(){
        $('.navigation-sidebar').removeClass('show-navigation-sidebar');
        $('.navigation-overlay').css('display', 'none');
    })

    $(window).click(function(e){
        if($(e.target).hasClass('navigation-overlay')){
            $('.navigation-sidebar').removeClass('show-navigation-sidebar');
            $('.navigation-overlay').css('display', 'none');
        }
    })
})

document.addEventListener('DOMContentLoaded', function () {
    // Temukan elemen tombol simpan
    var simpanButton = document.getElementById('simpanButton');

    // Tambahkan event listener untuk menangani klik tombol simpan
    simpanButton.addEventListener('click', function () {
        // Tambahkan logic SweetAlert2 di sini
        Swal.fire({
            icon: 'success',
            title: 'Berhasil disimpan!',
            showConfirmButton: false,
            timer: 1500 // Set waktu tampilan pesan
        });
    });
});

document.addEventListener('DOMContentLoaded', function () {
    // Temukan elemen tombol simpan
    var simpanButton = document.getElementById('deleteButton');

    // Tambahkan event listener untuk menangani klik tombol simpan
    simpanButton.addEventListener('click', function () {
        // Tambahkan logic SweetAlert2 di sini
        Swal.fire({
            icon: 'success',
            title: 'Berhasil dihapus!',
            showConfirmButton: false,
            timer: 1500 // Set waktu tampilan pesan
        });
    });
});
