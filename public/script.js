// Script per il bottone per tornare su
function tornaSu() {
    // Fa scorrere la pagina verso l'alto in modo fluido
    window.scrollTo({
        top: 0, // Posizione in alto
        behavior: "smooth" // Scorrimento fluido
    })
}

// Script per far apparire il bottone "torna su" ad un certo punto dello scroll
window.addEventListener('scroll', (e) => {
    const scrollPosition = window.scrollY // Ottiene la posizione verticale dello scroll
    const windowHeight = window.innerHeight // Ottiene l'altezza della finestra del browser
    const scrollThreshold = 1.5 // Soglia di scroll per mostrare il bottone
    const tornaSuBtn = document.getElementById('torna-su-btn') // Seleziona il bottone con ID 'torna-su-btn'

    // Mostra il bottone "torna su" se lo scroll supera la soglia
    if (scrollPosition > windowHeight * scrollThreshold) {
        tornaSuBtn.style.display = "block"
    } else {
        // Nasconde il bottone "torna su" se lo scroll è inferiore alla soglia
        tornaSuBtn.style.display = "none"
    }
})

// Script per far apparire la sezione "nuovi prodotti" ad un certo punto dello scroll
window.addEventListener('scroll', (e) => {
    const scrollPosition = window.scrollY // Ottiene la posizione verticale dello scroll
    const windowHeight = window.innerHeight // Ottiene l'altezza della finestra del browser
    const scrollThreshold = 300 // Soglia di scroll per mostrare la sezione
    const best = document.getElementById('best_seller') // Seleziona l'elemento con ID 'best_seller'

    // Mostra la sezione "nuovi prodotti" se lo scroll supera la soglia
    if (scrollPosition > windowHeight * scrollThreshold) {
        best.style.display = "block"
    } else {
        // Nasconde la sezione "nuovi prodotti" se lo scroll è inferiore alla soglia
        best.style.display = "none"
    }
})

// Inizio del codice JavaScript per la gestione dell'interazione con i bottoni

// Seleziona l'elemento con ID 'titolo_slogan_card' e 'button'
const slogan = document.getElementById("titolo_slogan_card")
const button = document.getElementById('button')
const button_togli = document.getElementById('button_togli') // Seleziona il bottone per nascondere il titolo

// Aggiunge un evento di click al bottone per mostrare il 'slogan'
button.addEventListener('click', function () {
    slogan.style.display = "block" // Mostra lo slogan
    button.style.display = "none"; // Nasconde il bottone di attivazione
    button_togli.style.display = "block"; // Mostra il bottone per nascondere lo slogan
})

// Aggiunge un evento di click al bottone per ripristinare la visibilità dello slogan
button_togli.addEventListener('click', function () {
    button.style.display = "block" // Ripristina la visibilità del bottone di attivazione
    slogan.style.display = "none" // Nasconde lo slogan
    button_togli.style.display = "none"; // Nasconde il bottone di disattivazione
})

// Seleziona l'elemento con ID 'titolo_slogan_card1' e 'button1'
const slogan1 = document.getElementById("titolo_slogan_card1")
const button1 = document.getElementById('button1')
const button_togli1 = document.getElementById('button_togli1') // Seleziona il bottone per nascondere il titolo

// Aggiunge un evento di click al bottone per mostrare il 'slogan1'
button1.addEventListener('click', function () {
    slogan1.style.display = "block" // Mostra lo slogan1
    button1.style.display = "none"; // Nasconde il bottone di attivazione
    button_togli1.style.display = "block"; // Mostra il bottone per nascondere lo slogan1
})

// Aggiunge un evento di click al bottone per nascondere lo slogan1
button_togli1.addEventListener('click', function () {
    button1.style.display = "block" // Ripristina la visibilità del bottone di attivazione
    slogan1.style.display = "none" // Nasconde lo slogan1
    button_togli1.style.display = "none"; // Nasconde il bottone di disattivazione
})

// Seleziona l'elemento con ID 'titolo_slogan_card2' e 'button2'
const slogan2 = document.getElementById("titolo_slogan_card2")
const button2 = document.getElementById('button2')
const button_togli2 = document.getElementById('button_togli2') // Seleziona il bottone per nascondere il titolo

// Aggiunge un evento di click al bottone per mostrare il 'slogan2'
button2.addEventListener('click', function () {
    slogan2.style.display = "block" // Mostra lo slogan2
    button2.style.display = "none"; // Nasconde il bottone di attivazione
    button_togli2.style.display = "block"; // Mostra il bottone per nascondere lo slogan2
})

// Aggiunge un evento di click al bottone per nascondere lo slogan2
button_togli2.addEventListener('click', function () {
    button2.style.display = "block" // Ripristina la visibilità del bottone di attivazione
    slogan2.style.display = "none" // Nasconde lo slogan2
    button_togli2.style.display = "none"; // Nasconde il bottone di disattivazione
})

