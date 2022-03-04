<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h4>Crear</h4></div>
                <div class="card-body">
                    <form @submit.prevent="crear">
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
    name:"crearmodulo",
    data(){
        return {
            modulo1:{
                tamaño:"",
                ingredientes:"",
                precio:""
            }
        }
    },
    methods:{
        async crear(){
            await this.axios.post('/api/modulo1',this.blog).then(response=>{
                this.$router.push({name:"mostrarmodulos"})
            }).catch(error=>{
                console.log(error)
            })
        }
    }
}
</script>