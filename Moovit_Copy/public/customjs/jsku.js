function geserKanan() {
    let divNya = document.getElementById("navbar-kanan");
    let panahnya = document.getElementById("panah-kanan");
    let petanya = document.querySelector(".bungkus-peta iframe");
    if(panahnya.style.transform == "rotate(0deg)") {
        divNya.style.marginLeft = "200px";
        petanya.style.transition = "0.25s";
        petanya.style.width = "122%";
        panahnya.style.transform = "rotate(-180deg)";
        // window.history.pushState('', 'New Page Title', '/testing');
    } else {
        divNya.style.marginLeft = "63.987px";
        panahnya.style.transform = "rotate(0deg)";
        petanya.style.transition = "0.3s";
        petanya.style.width = "107%";

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

  function keren() {
    let loader = document.getElementById("loaderku");
    let peta = document.getElementById("petaku");
    loader.style.display = "none";
    peta.style.display = "block";
  }

