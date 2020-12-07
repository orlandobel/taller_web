function showModal(nombre, email) {
    let modal = document.getElementById("modal1");
    let editNombre = document.getElementById("edit_nombre");
    let editEmail = document.getElementById("edit_email");

    editNombre.value = nombre;
    editEmail.value = email;
    modal.style.top = "50px";
}

function hideModal() {
    let modal = document.getElementById("modal1");
    modal.style.top = "-400px";
}