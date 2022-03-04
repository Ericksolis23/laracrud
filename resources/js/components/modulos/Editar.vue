<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h4>Editar</h4></div>
                <div class="card-body">
                    <form @submit.prevent="actualizar">
                         <div class="row">
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Título</label>
                                    <input type="text" class="form-control" v-model="modulo1.titulo">
                                </div>
                            </div>
                            <div class="col-12 mb-2">

                                <div class="form-floating">
                                <textarea class="form-control" id="floatingTextarea2" v-model="modulo1.contenido" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Contenido</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>                          
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:"editarmodulo",
    data(){
        return {
            modulo1:{
                titulo:"",
                tamaño:"",
                ingredientes:"",
                precio:"",

            }
        }
    },
    mounted(){
        this.mostrarmodulo()
    },
    methods:{
        async mostrarBlog(){
            await this.axios.get(`/api/blog/${this.$route.params.id}`).then(response=>{
                const { titulo, tamaño, ingredientes, precio } = response.data
                this.modulo1.titulo = titulo
                this.modulo1.contenido = contenido
            }).catch(error=>{
                console.log(error)
            })
        },
        async actualizar(){
            await this.axios.put(`/api/modulo1/${this.$route.params.id}`,this.blog).then(response=>{
                this.$router.push({name:"mostrarmodulo"})
            }).catch(error=>{
                console.log(error)
            })
        }
    }
}
</script>