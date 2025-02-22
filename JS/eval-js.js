// declarationde variable 
let listeDeTaches = []
let tasklistul = document.getElementById("TASKLIST")
let bouton = document.getElementById("ADDTASKBUTTON")
let input = document.getElementById("TASKINPUT")

let btn =""
let li = ""
let valeur =""
// fonction ajoutertache


bouton.addEventListener("click", ajouter)
   

   
        
    

function ajouter(){

    let valeur = input.value
    listeDeTaches.push(valeur)
    console.log(listeDeTaches)

    afficher()
    
}

function afficher(){
    for (let i = 0; i < listeDeTaches.length; i++) {
        let btn = document.createElement("button")
        let li = document.createElement("li")
        let element = listeDeTaches[i];
        btn.textContent = ("Supprimer")
        li.textContent = element
        console.log(element)
        tasklistul.appendChild(li)
        li.appendChild(btn)
        input.value = ""

        // fonction effacer tache
            btn.addEventListener("click", function(){

                effacer(li)
            })
            
        
    }
}
function effacer(li){
    let index=listeDeTaches.indexOf(valeur)
    
        listeDeTaches.splice(index,1)
        console.log(listeDeTaches)
        li.remove(index)

}


    
// declartion listedestache  1

// peu de commentaires     0.5 

// creation des fonctions  :pas de fonction mais le code est la 2.5 2.5 2.5 

// gitthub : 1

// general 4 

// 14


