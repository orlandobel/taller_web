$(document).ready(() => {
    getUsuarios();
});
const table = $("#table-body");
const modal = $("#editModal");
const nombre = $("#edit_nombre");
const email = $("#edit_email");
const pass = $("#edit_pass");
var usuarios;
function getUsuarios() {
    $.get({
        url: '../database/app.php',
        success: function(data) {
            let res = JSON.parse(data);
            usuarios = res.usuarios;
            console.log(usuarios);
            usuarios.forEach((usuario) => {
                table.append(
                    `<tr>
                        <th>` + usuario.id + `</th>
                        <td>` + usuario.nombre + `</td>
                        <td>` + usuario.email + `</td>
                        <td> <button class="btn btn-primary" onclick="editUsuario(`+usuario.index+`);">editar</button>
                    </tr>`
                );
            });
        },
    });
}
function editUsuario(index) {
    const usuario = usuarios[index];
    console.log(usuario);
    nombre.val(usuario.nombre);
    email.val(usuario.email);
    pass.val(usuario.pass);  
    modal.css('top', 10, 'px');
}
function closeModal() {
    modal.css('top', -400, 'px');
}