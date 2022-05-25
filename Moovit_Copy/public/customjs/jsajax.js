let inputan = document.getElementById('Awal');
let pilihan = document.getElementById('pilihan');
let recent = document.getElementById('recent');
inputan.addEventListener('keyup', function() {
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     pilihan.innerHTML = this.responseText;
    }
  };
  xhr.open('GET', 'ajax/pilihannya.php?kunci=' + inputan.value, true);
  xhr.send();
})

inputan.addEventListener('focus', function() {
        pilihan.style.display = 'block';
        recent.style.display = 'none';
})
inputan.addEventListener('blur', function() {
    recent.style.display = 'block';
    pilihan.style.display = 'none';
})