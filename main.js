function imageLoop() {
    // Characters List
    let charData = [
        {
            name: "Aarth Van Luiken",
            age: 17,
            from: "Dorchester",
            label: "Prince Of Dorchester"
        }, {
            name: "Annatasyah Van Luiken",
            age: 17,
            from: "Dorchester",
            label: "Princess Of Dorchester"
        }, {
            name: "Eleanor De Louise",
            age: 17,
            from: "Sciermicz",
            label: "Princess Of Sciermicz"
        }, {
            name: "Marcus Crist Valovell",
            age: 42,
            from: "Höfferlandt",
            label: "King Of Höfferlandt"
        }, {
            name: "Marrionette Van Luiken",
            age: 40,
            from: "Dorchester",
            label: "Queen Of Dorchester"
        }, {
            name: "Nathan De Säuberlich",
            age: 45,
            from: "Aeslarent",
            label: "King Of Aeslarent"
        },
    ]

    const parent = document.getElementById("char-container"); // Declarating Parent Elements

    // Set For Loop 
    for (let i = 1; i <= charData.length; i++) {

        // Create Childs Element And Setting The Class To char-box
        const childs = document.createElement("div");
        childs.className = "char-box"

        // Create Image Element And Make It Syncronyz To index
        const image = document.createElement("img");
        image.setAttribute("src", "img/Characters/" + i + ".jpeg")
        image.className = "image" + i

        // Create Name Caption To Image
        const caption = document.createElement("p");
        caption.className = "caption" + i
        caption.innerHTML = `<span>${charData[i-1].name}</span><br><span>${charData[i-1].age} Tahun</span><br><span>Dari ${charData[i-1].from}</span><br><span>${charData[i-1].label}</span><br>` // charInfo[i - 1].from + "<br>" + charInfo[i - 1].label

        // Create Characters Information
        // const paragraph = document.createElement("p");

        
        // Append Image & Caption To Childs Element
        childs.appendChild(image)
        childs.appendChild(caption)

        // Append Child To Parent Element
        parent.appendChild(childs)

        console.log(charData.char)
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