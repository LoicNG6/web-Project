
    window.onload = () => {
    document.querySelectorAll("[data-reply]").forEach(element=>{
        element.addEventListener("click", function (){
            document.querySelector("#comment_parent").value = this.dataset.id;
        });
    });
}

