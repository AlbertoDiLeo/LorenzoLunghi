document.addEventListener("DOMContentLoaded", function () {

  if (!document.getElementById("servizi-page")) return;
  
  const serviceTitles = document.querySelectorAll(".service-title");

  serviceTitles.forEach(title => {
      title.addEventListener("click", function () {
          const icon = this.querySelector("i");
          const isOpen = this.getAttribute("aria-expanded") === "true";

          // Chiude tutte le altre icone
          document.querySelectorAll(".service-title i").forEach(i => i.classList.replace("bi-chevron-up", "bi-chevron-down"));

          // Cambia l'icona in base allo stato
          if (isOpen) {
              icon.classList.replace("bi-chevron-up", "bi-chevron-down");
          } else {
              icon.classList.replace("bi-chevron-down", "bi-chevron-up");
          }
      });
  });
});






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