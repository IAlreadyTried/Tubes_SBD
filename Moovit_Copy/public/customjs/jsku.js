let divnya = document.getElementById("gambar-kiri-atas");
if(window.innerWidth >= 576) {
    divnya.style.backgroundSize = "200px";
}else {
    divnya.style.backgroundSize = "cover";
}