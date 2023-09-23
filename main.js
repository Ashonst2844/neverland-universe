// Import Packages

function imageLoop() {

    // Characters Name List
    let names = [
        "Aarth Van Luiken",
        "Annatasyah Van Luiken",
        "Eleanor De Louise",
        "Marcus Crist Valovell",
        "Marrionette Van Luiken",
        "Nathan De Säuberlich"
    ]

    const parent = document.getElementById("char-container"); // Declarating Parent Elements

    // Set For Loop 
    for (let i = 1; i <= names.length; i++) {

        // Create Childs Element And Setting The Class To char-box
        const childs = document.createElement("div");
        childs.className = "char-box"

        // Create Image Element And Make It Syncronyz To index
        const image = document.createElement("img");
        image.setAttribute("src", "img/Characters/"+i+".jpeg")

        // Create Name Caption To Image
        const caption = document.createElement("figcaption");
        caption.innerText = names[i - 1]
        
        // Append Image & Caption To Childs Element
        childs.appendChild(image)
        childs.appendChild(caption)

        // Append Child To Parent Element
        parent.appendChild(childs)
    }
}

// Region Description Navigation Control Function
function regionDesc(index) {

    let dorc = document.getElementById("reg-1"); // Declarating Dorchester Element
    let höff = document.getElementById("reg-2"); // Declarating Höfferlandt Element
    let scie = document.getElementById("reg-3"); // Declarating Sciermicz Element
    let aesl = document.getElementById("reg-4"); // Declarating Aeslarent Element

    // Set Default Display Style To None 
    dorc.style.display = "none";
    höff.style.display = "none";
    scie.style.display = "none";
    aesl.style.display = "none";

    // Set If Conditions
    if (index == '1') { // If Index 1, Set Dorchester Description Display Style Block
        dorc.style.display = "block"
    } else if (index == '2') { // If Index 2, Set Höfferlandt Description Display Style Block
        höff.style.display = "block"
    } else if (index == '3') { // If Index 3, Set Scriermicz Description Display Style Block
        scie.style.display = "block"
    } else { // If Index > 3, Set Aeslarent Description Display Style Block
        aesl.style.display = "block"
    }
}

// Execute Function
imageLoop()

const validator = require('validator')