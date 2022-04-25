<template>
    <div>
        <h1>Modificacion de los datos ID:{{id_}}</h1>
        <div class="nav justify-content-center">
        <div>
        <tr >
            <td>
                <h3>Categoria</h3>
            </td>
            <td>
                <input type = "text" v-model="categoria"/>
            </td>
        </tr>
        
        <tr >
            <td>
                <h3>Nombre</h3>
            </td>
            <td>
                <input type = "text" v-model="nombre"/>
            </td>
        </tr>
        

        <tr >
            <td>
                <h3>Genero</h3>
            </td>
            <td>
                <input type = "text" v-model="genero"/>
            </td>
        </tr>

       <tr >
            <td>
                <h3>Descripcion</h3>
            </td>
            <td>
                <input type = "text" v-model="descripcion"/>
            </td>
        </tr>
        </div>
        </div>
       

        <br>
        <button @click="actualizar" class="btn btn-info">Guardar</button>

    </div>
</template>

<script>

export default({
  data(){
        return{
            id_:this.$route.query.id,
            categoria:"",
            nombre:"",
            genero:"",
            descripcion:"",
            
        }
    },
    mounted(){
        this.get_juego()
    },
    methods:{
        async get_juego(){
            var reponse = await fetch("http://127.0.0.1:8000/api/juego/"+this.id_);
            var datos = await reponse.json();
            var r = datos.data
            this.categoria = r.categoria
            this.nombre = r.nombre
            this.genero = r.genero
            this.descripcion = r.descripcion
            
        },
        async actualizar(){
            var datos ={
                "categoria":this.categoria,
                "nombre":this.nombre,
                "genero":this.genero,
                "descripcion":this.descripcion,
                

            }
            var reponse = await fetch("http://127.0.0.1:8000/api/juego/"+this.id_,{
                "method":"PUT",
                headers:{
                    'Content-Type':'application/json'
                },
                body: JSON.stringify(datos)
                
            });
            console.log(reponse)
        }
       
    }
})
</script>