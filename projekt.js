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
/*Az egészet ctrl + c ctrl + v, mindeggyik divnek*/
var cardid = document.getElementById("card");
cradid.onclick() = function(){
    this.classList.toggle("")
}

