$(document).ready(() => {
    // hilangkan tombol cari
    $('#tombolCari').hide();

    // event ketika ditulis
    $('#keyword').on('keyup', () => {
        // munculkan loader
        $('.loader').show();

        // ajax menggunakan load
        // $('#container').load('ajax/mahasiswa.php?keyword=' + $('#keyword').val());

        // $.get
        $.get('ajax/mahasiswa.php?keyword=' + $('#keyword').val(), function(data){
            $('#container').html(data);
            $('.loader').hide();
        });
    });

});