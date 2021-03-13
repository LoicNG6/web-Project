
window.onload = () =>{
    // Gestion des liens "Supprimer"
    let links = document.querySelectorAll("[data-delete]")

    for(link of links){

        link.addEventListener("click", function(e){
            // on peche la navigation en cliquant sur le lien supprimer
            e.preventDefault()

            //affichage d'une popop avec un message de confirmation
            if (confirm("souhaitez-vous supprimer cette image")){

                fetch(this.getAttribute("href"),{
                    method: "DELETE",    // appel de la methode delete
                    headers: {           // envoyer les informations en entete
                        "X-Requested-With": "XMLHttpRequest", // type de requette envoyer
                        "Content-Type": "application/json"    // envoie de JSON
                    },
                    // envois des données en json
                    //dataset recupère le contenu du token
                    body: JSON.stringify({"_token": this.dataset.token})
                    //apres le fetch est envoyé
                }).then(
                    // on récupère la réponse en JSON
                    response => response.json()
                ).then(data => {
                    if (data.success)
                        this.parentElement.remove()
                    else
                        alert(data.error)
                    }).catch( e=> alert(e))
            }
        })
    }
}




