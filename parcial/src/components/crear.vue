<template>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <div class="crear">
        <H1>Crear un nuevo ingreso de  juegos</H1>
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
 </head>
</template>



<script>

export default({
  data(){
        return{
            
            categoria:"",
            nombre:"",
            genero:"",
            descripcion:"",
        }
    },
    

    methods:{
        async save(){
            var datos ={
                "categoria":this.categoria,
                "nombre":this.nombre,
                "genero":this.genero,
                "descripcion":this.descripcion,

            }
            var reponse = await fetch("http://127.0.0.1:8000/api/juego/save",{
                "method":"POST",
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
