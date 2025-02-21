// declarationde variable 
let listeDeTaches = []
let tasklistul = document.getElementById("TASKLIST")
let bouton = document.getElementById("ADDTASKBUTTON")
let input = document.getElementById("TASKINPUT")

let btn =""
let li = ""
let valeur =""
// fonction ajoutertache


bouton.addEventListener("click", () => {
    let btn = document.createElement("button")
    let li = document.createElement("li")
    let valeur = input.value
    listeDeTaches.push(valeur)
    console.log(listeDeTaches)
    // fonction afficherTache(){}
        for (let i = 0; i < listeDeTaches.length; i++) {
            let element = listeDeTaches[i];
            btn.textContent = ("Supprimer")
            li.textContent = element
            console.log(element)
            tasklistul.appendChild(li)
            li.appendChild(btn)
            input.value = ""
            
        }
// fonction effacer tache
    btn.addEventListener("click", () => {
        let index=listeDeTaches.indexOf(valeur)
        
            listeDeTaches.splice(index,1)
            console.log(listeDeTaches)
            li.remove(index)
        })
    
})


    

