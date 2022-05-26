let inputan1 = document.getElementById('Awal');
let pilihan = document.getElementById('pilihan');
let recent = document.getElementById('recent');
inputan1.addEventListener('focus', function() {
  inputan1.addEventListener('keyup', function() {
      var xhr = new XMLHttpRequest();

      xhr.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
      pilihan.innerHTML = this.responseText;
      }
    };
    xhr.open('GET', 'ajax/pilihannya.php?kunci=' + inputan1.value, true);
    xhr.send();
    if(inputan1.value=="") {
      pilihan.style.display = 'none';
      recent.style.display = 'block';
    }else {
      pilihan.style.display = 'block';
      recent.style.display = 'none';
    }
  })
})


let inputan2 = document.getElementById('Akhir');
inputan2.addEventListener('focus', function() {
  inputan2.addEventListener('keyup', function() {
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    pilihan.innerHTML = this.responseText;
    }
  };
  xhr.open('GET', 'ajax/pilihannya2.php?kunci=' + inputan2.value, true);
  xhr.send();
  if(inputan2.value=="") {
    pilihan.style.display = 'none';
    recent.style.display = 'block';
  }else {
    pilihan.style.display = 'block';
    recent.style.display = 'none';
  }
  })
})