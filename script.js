
document.addEventListener("DOMContentLoaded", function () {
  const recensioni = [
      { testo: "Servizio impeccabile! Puntuali, precisi e professionali. Consigliatissimo!", autore: "Marco R." },
      { testo: "Lavoro svolto alla perfezione e nei tempi stabiliti. Un vero professionista!", autore: "Anna L." },
      { testo: "Ottima consulenza, disponibilità e cortesia. Mi sono trovato benissimo!", autore: "Francesco B." }
  ];

  const recensioniContainer = document.getElementById("recensioniContainer");
  const recensioneTemplate = document.getElementById("recensioneTemplate");

  recensioni.forEach(({ testo, autore }) => {
      let newRecensione = recensioneTemplate.cloneNode(true);
      newRecensione.style.display = "block";
      newRecensione.querySelector(".card-text").textContent = `"${testo}"`;
      newRecensione.querySelector(".card-title").textContent = `- ${autore}`;
      recensioniContainer.appendChild(newRecensione);
  });
});