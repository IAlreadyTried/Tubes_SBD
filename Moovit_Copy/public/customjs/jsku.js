// let divnya = document.getElementById("gambar-kiri-atas");
// if(window.innerWidth >= 576) {
//     divnya.style.backgroundSize = "200px";
// }else {
//     divnya.style.backgroundSize = "cover";
// }

function geserKanan() {
    let divNya = document.getElementById("navbar-kanan");
    let panahnya = document.getElementById("panah-kanan");
    if(panahnya.style.transform == "rotate(0deg)") {
        divNya.style.marginLeft = "200px";
        panahnya.style.transform = "rotate(-180deg)";
    } else {
        divNya.style.marginLeft = "63.987px";
        panahnya.style.transform = "rotate(0deg)";

    }
}

window.addEventListener("resize", function() {
    let mauhilang = this.document.getElementById("mau-dihilangkan-kiri");
    let navbarKanan = document.getElementById("navbar-kanan");
    if (window.matchMedia("(max-width: 575px)").matches) {
      mauhilang.style.display = "none";
    } else {
        mauhilang.style.display = "block";
    }
  })