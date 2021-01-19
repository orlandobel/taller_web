const app = new Vue({
    el: '#app', //const el = document.getElementById('#app');
    data: {
        usuarios: [],
        usuario: {
            id: 1,
            nombre: "Orlando",
            email: "orlando@gmail.com",
            pass: '1234'
        },
        visible: false,
    },
    methods: {
        getUsuarios: function() {
            axios.get('../database/app.php')
                .then(function(res) {
                    const data = res.data;
                    console.log(data);
                    if(data.estatus) {
                        app.usuarios = data.usuarios;
                    }
                });
        },
        postUsuario: function() {
            axios.post('../database/app.php', {usuario: this.usuario})
                .then(function(res) {
                    console.log(res.body);
                });
        },
        showModal: function(usuario) {
            this.usuario = usuario;
            this.visible = true;
        },
        hideModal: function() {
            this.visible = false;
        }
    },
    mounted: function() {
        this.getUsuarios();
    }
});