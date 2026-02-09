function toggleMode() {
  const body = document.body;
  const szoveg = document.getElementById("hatterszoveg");
  const gomb = document.getElementById("gomb");

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
}

function bigCard(bc) {
  // contains zárójelébe rakd be azt a class-t ami a kártyának alapból meg van adva pl.( conatins(card) )
  if (this.classList.contains()) {
    // a toggle zárójelébe rakd be azt a class-t ami a kártyának akarsz adni pl.( toggle(masikcard) )
    this.classList.toggle();
    // aztán a kártyának az alap class-ját pl.( toggle(card) )
    this.classList.toggle();
  } else {
    // a toggle zárójelébe rakd be a kártyának az alap class-ját pl.( toggle(card) )
    this.classList.toggle();
    // aztán a kártyának azt a class-ját amit előző if-be megadtál pl.( toggle(masikcard) )
    this.classList.toggle();
  }
}

var cardelements = document.getElementsByClassName("carde");
for (var i = 0; i < cardelements.length; i++) {
  cardelements[i].addEventListener("click", bigCard);
}
