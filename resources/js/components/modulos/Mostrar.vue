<template>
clear eslint-plugin-var vm = new Vue({
    el: "#replace"
})
  }
    <div class="row">
        <div class="col-12 mb-2">
            
            <router-link :to='{name:"crearmodulo"}' class="btn btn-success"><i class="fas fa-plus-circle"></i></router-link>
        </div>
        <div class="col-12">             
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th>ID</th>
                                    <th>Tamaño</th>
                                    <th>Ingredientes</th>
                                    <th>Precio</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="modulo1 in modulo1" :key="modulo1.id">
                                    <td>{{ modulo1.id }}</td>
                                    <td>{{ modulo1.tamaño }}</td>
                                    <td>{{ modulo1.ingredientes }}</td>
                                    <td>{{ modulo1.precio }}</td>
                                    <td>
                                        
                                        <router-link :to='{name:"editarmodulo",params:{id:modulo1.id}}' class="btn btn-info"><i class="fas fa-edit"></i></router-link>
                                        <a type="button" @click="borrarmodulo(modulo1.id)" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                            
                        </table>
                    </div>                          
        </div>
    </div>
</template>

<script>
export default {
    name:"pasteles",
    data(){
        return {
            pasteles:[]
        }
    },
    mounted(){
        this.mostrarmodulo()
    },
    methods:{
        async mostrarmodulo(){
            await this.axios.get('/api/modulo1').then(response=>{
                this.pasteles = response.data
            }).catch(error=>{
                console.log(error)
                this.pasteles = []
            })
        },
        borrarBlog(id){
            if(confirm("¿Desea eliminar el registro?")){
                this.axios.delete(`/api/modulo1/${id}`).then(response=>{
                    this.mostrarmodulo()
                }).catch(error=>{
                    console.log(error)
                })
            }
        }
    }

}
</script>

