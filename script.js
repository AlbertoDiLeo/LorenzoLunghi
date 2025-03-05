
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


/*function showNotification(message, type = 'success') {
  const notification = document.getElementById('notification');

  // Se l'elemento non esiste, esci dalla funzione
  if (!notification) return;

  // Se è la prima volta che viene chiamata, svuota e prepara il contenitore
  if (!notification.dataset.initialized) {
      notification.innerHTML = "<ul class='mb-0'></ul>";
      notification.dataset.initialized = "true"; // Evita di sovrascrivere la notifica ogni volta che viene chiamata.
  }

  // Rimuove le classi precedenti e imposta il tipo di alert
  notification.className = 'alert alert-dismissible fade show';
  notification.classList.add(type === 'success' ? 'alert-success' : 'alert-danger');

  // Recupera la lista UL e aggiunge il nuovo messaggio
  const messageList = notification.querySelector("ul");
  const newMessage = document.createElement("li");
  newMessage.textContent = message;
  messageList.appendChild(newMessage);

  // Mostra l'alert
  notification.classList.remove('d-none');

  // Resetta il timer per nascondere la notifica dopo 5 secondi
  clearTimeout(notification.hideTimeout);
  notification.hideTimeout = setTimeout(() => {
      notification.classList.add('d-none');
      notification.dataset.initialized = ""; // Reset per la prossima volta
  }, 3000);
}*/






document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector("form");

  if (!form) return; // Se il form non esiste, interrompe l'esecuzione dello script

  form.addEventListener("submit", function (event) {
      event.preventDefault(); // Blocca il comportamento predefinito del form

      const telefono = document.getElementById("telefono").value;
      const telefonoRegex = /^[0-9]{10}$/; // Modifica questa regex in base al formato desiderato

      if (!telefonoRegex.test(telefono)) {
        event.preventDefault();
        showNotification("Inserisci un numero di telefono valido.", "error");
        return;
      }

      let formData = new FormData(this);

      fetch("preventivo.php", {
          method: "POST",
          body: formData
      })
      .then(response => response.json()) // Converte la risposta in JSON
      .then(data => {
          showNotification(data.message, data.status);
          if (data.status === "success") {
              form.reset(); // Resetta il form dopo l'invio riuscito
          }
      })
      .catch(error => {
          showNotification("Si è verificato un errore", "error");
          console.error("Errore durante l'invio:", error);
      });
  });

  function showNotification(message, type) {
      let notification = document.createElement("div");
      notification.innerText = message;
      notification.classList.add("notification", type === "success" ? "success" : "error");

      document.body.appendChild(notification);

      setTimeout(() => {
          notification.remove();
      }, 3000); // La notifica scompare dopo 3 secondi
  }
});



document.addEventListener("DOMContentLoaded", function () {
  fetch("api.php") // Chiama il file PHP che nasconde la API Key
    .then(response => response.json())
    .then(data => {
      let reviewsContainer = document.getElementById("reviewsContainer");
      if (data.result && data.result.reviews) {
        data.result.reviews.forEach(review => {
          let reviewCard = `
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">${review.author_name}</h5>
                <p class="card-text">"${review.text}"</p>
                <p class="text-muted">⭐ ${review.rating} / 5</p>
              </div>
            </div>
          `;
          reviewsContainer.innerHTML += reviewCard;
        });
      } else {
        reviewsContainer.innerHTML = "<p>Nessuna recensione trovata.</p>";
      }
    })
    .catch(error => console.error("Errore nel recupero delle recensioni:", error));
});

