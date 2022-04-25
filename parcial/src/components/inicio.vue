<template>
    <div>
        <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        </head> 
        <H1>Lista de alimentos</H1>
        <!--button @click="get_juegos()">actualizar</button-->
        <div>

            <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(item,_) in juegos" v-bind:key="_">
                    
                    <th scope="col">{{item.id}}</th>
                    <th scope="col">{{item.categoria}}</th>
                    <th scope="col">{{item.nombre}}</th>
                    <th scope="col">{{item.genero}}</th>
                    <th scope="col">{{item.descripcion}}</th>
                    <th scope="col"><button @click="editar(item.id)" type="button" class="btn btn-info">Editar</button></th>
                    <th scope="col"><button @click="eliminar(item.id)" type="button" class="btn btn-danger"> Eliminar</button></th>

                </tr>
            </tbody>
            </table>
         
        </div>

    </div>
    
</template>

<script>



export default ({

    data(){
        return{
            contador:0,
            juegos:null,
            size: 0
        }
    },
    mounted(){
        this.get_juegos()
    },

    methods:{

        async get_juegos(){
            var reponse = await fetch("http://127.0.0.1:8000/api/juego");
            var datos = await reponse.json();
            //var alimentos = r.json()
            this.juegos = datos.data

            console.log(this.juegos)
        },
        async eliminar(id){
            console.log(id)
            
            var reponse = await fetch("http://127.0.0.1:8000/api/juego/"+id,{
                "method":"DELETE"
            });
            console.log(reponse)
            this.get_juegos()
            
        },
        editar(id_){

            console.log("funciona")
            this.$router.push({path:"/editar", query:{id:id_}})
        }
        

        
    }
})
</script>

