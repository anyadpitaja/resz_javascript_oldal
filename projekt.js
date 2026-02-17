function toggleMode() {
  const body = document.body;
  const szoveg = document.getElementById("hatterszoveg");
  const gomb = document.getElementById("gomb");

  if (szoveg != null) {
    if (szoveg.classList.contains("szimplayaplight")) {
      szoveg.classList.toggle("szimplayaplight");
      body.classList.toggle("dark");
      szoveg.classList.toggle("szimplayapdark");
      body.classList.toggle("light");
      gomb.textContent = "Sötét mód";
    } else {
      szoveg.classList.toggle("szimplayapdark");
      body.classList.toggle("light");
      szoveg.classList.toggle("szimplayaplight");
      body.classList.toggle("dark");
      gomb.textContent = "Világos mód";
    }
  } else {
    if (body.classList.contains("dark")) {
      body.classList.toggle("dark");
      body.classList.toggle("light");
    } else {
      body.classList.toggle("light");
      body.classList.toggle("dark");
    }
  }
}

function bigCard(bc) {
  console.log(this.children[0].children);
  // contains zárójelébe rakd be azt a class-t ami a kártyának alapból meg van adva pl.( conatins(card) )
  if (this.classList.contains("albumcard")) {
    // a toggle zárójelébe rakd be azt a class-t ami a kártyának akarsz adni pl.( toggle(masikcard) )
    this.classList.toggle("albumcardnagy");
    this.children[0].classList.toggle("kisalbumcover");
    this.children[1].classList.toggle("abracadabra");
    this.children[1].children[1].classList.toggle("abracadabra");
    this.children[0].children[2].classList.toggle("abracadabra");

    // aztán a kártyának az alap class-ját pl.( toggle(card) )
    this.classList.toggle("albumcard");
    this.children[0].classList.toggle("albumcover");
  } else {
    // a toggle zárójelébe rakd be a kártyának az alap class-ját pl.( toggle(card) )
    this.classList.toggle("albumcard");
    this.children[0].classList.toggle("albumcover");
    

    // aztán a kártyának azt a class-ját amit előző if-be megadtál pl.( toggle(masikcard) )
    this.classList.toggle("albumcardnagy");
    this.children[0].classList.toggle("kisalbumcover");
    this.children[1].classList.toggle("abracadabra");
    this.children[1].children[1].classList.toggle("abracadabra");
    this.children[0].children[2].classList.toggle("abracadabra");
  }
}

var cardelements = document.getElementsByClassName("albumcard");
for (var i = 0; i < cardelements.length; i++) {
  cardelements[i].addEventListener("click", bigCard);
}
