function imageLoop() {
    let totalIndex = 6
    let name = ""

    for (let i = 1; i <= totalIndex; i++) {
        switch (i) {
            case 1:
                name = "Aarth Van Luiken"
                break;
            case 2:
                name = "Annatasyah Van Luiken"
                break;
            case 3:
                name = "Eleanor De Louise"
                break;
            case 4:
                name = "Marcus Crist Valovell"
                break;
            case 5:
                name = "Marrionette Van Luiken"
                break;
            case 6:
                name = "Nathan De Säuberlich"
                break;
            default:
                break;
        }
        let parent = document.getElementById("char-container");
        let childs = document.createElement("div");
        childs.className = "char-box";
        let image = document.createElement("img")
        image.setAttribute("src", "img/Characters/" + i + ".jpeg");
        let caption = document.createElement("figcaption");
        caption.innerHTML = name;
        
        childs.appendChild(image);
        childs.appendChild(caption);

        parent.appendChild(childs);
    }

    
}

function regionDesc(index) {
    let dorc = document.getElementById("reg-1");
    let höff = document.getElementById("reg-2");
    let scie = document.getElementById("reg-3");
    let aesl = document.getElementById("reg-4");

    if (index == '1') {
        dorc.style.display = "block"
        höff.style.display = "none"
        scie.style.display = "none"
        aesl.style.display = "none"
        
    } else if (index == '2') {
        höff.style.display = "block"
        dorc.style.display = "none"
        scie.style.display = "none"
        aesl.style.display = "none"
    } else if (index == '3') {
        scie.style.display = "block"
        höff.style.display = "none"
        dorc.style.display = "none"
        aesl.style.display = "none"
    } else if (index == '4') {
        aesl.style.display = "block"
        höff.style.display = "none"
        scie.style.display = "none"
        dorc.style.display = "none"
    }
}

imageLoop()