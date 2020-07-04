var keyword = document.getElementById('keyword');
var tombolcari = document.getElementById('tombol-cari');
var container = document.getElementById('container');

// tambahkan event ketika keyword di tulis
keyword.addEventListener('keyup', function()
{
	// buat objeck ajax
	var xhr = new XMLHttpRequest();

	// mengechek kesiapan ajax
	xhr.onreadystatechange = function()
	{
		if ( xhr.readyState == 4 && xhr.status == 200) {
			container.innerHTML = xhr.responseText;
		}
	}

	// eksekusi ajax
	xhr.open( 'GET', 'ajax/mahasiswa.php?keyword=' + keyword.value, true);
	xhr.send();
}
);