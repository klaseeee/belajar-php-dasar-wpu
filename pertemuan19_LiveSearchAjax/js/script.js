// ambil element yang dibutuhkan 
let keyword = document.getElementById("keyword");
let container = document.getElementById("container");
let tombol = document.getElementById("tombolCari");

// tambahkan event di dom keyword
keyword.addEventListener('keyup', () => {
    // buat object ajax
    let xhr = new XMLHttpRequest();

    // cek kesiapan ajax
    xhr.onreadystatechange = () => {
        if(xhr.readyState == 4 && xhr.status == 200) {
            container.innerHTML = xhr.responseText;
        }
    }

    // eksekusi ajax
    xhr.open('GET', 'ajax/mahasiswa.php?keyword=' + keyword.value, true);
    xhr.send();
});