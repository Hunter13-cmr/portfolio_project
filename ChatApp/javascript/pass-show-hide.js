// Sélectionnez toutes les icônes de basculement de mot de passe
const toggleIcons = document.querySelectorAll(".form .field i");

toggleIcons.forEach(icon => {
  icon.addEventListener("click", () => {
    // Récupérez l'ID du champ cible à l'aide de l'attribut data-target
    const targetFieldId = icon.getAttribute("data-target");
    const pswrdField = document.getElementById(targetFieldId);

    // Basculez entre 'password' et 'text'
    if (pswrdField.type === "password") {
      pswrdField.type = "text";
      icon.classList.add("active"); // Ajoute une classe "active" pour indiquer l'état
    } else {
      pswrdField.type = "password";
      icon.classList.remove("active");
    }
  });
});

const pswrdField = document.querySelector(".form input[type='password']"),
toggleIcon = document.querySelector(".form .field i");

toggleIcon.onclick = () =>{
  if(pswrdField.type === "password"){
    pswrdField.type = "text";
    toggleIcon.classList.add("active");
  }else{
    pswrdField.type = "password";
    toggleIcon.classList.remove("active");
  }
}
