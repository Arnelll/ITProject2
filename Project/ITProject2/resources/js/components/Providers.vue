<template>
    <div class="container">
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Providers</h3>
                <div class="card-tools">
                    <button class="btn btn-success" @click="addProvider()">
                        New Provider
                        <i class="fas fa-user-plus fa-fw"></i>
                    </button>
                    
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tr>
                    <th>Provider ID</th>
                    <th>Provider Name</th>
                    <th>Action</th>
                  </tr>
                  <tr v-for="provider in providers.data" :key="provider.provider_id">
                    <td>{{provider.provider_id}}</td>
                    <td>{{provider.name}}</td>
                    <td>
                        <a href="#">
                            <i class="fas fa-eye text-teal"></i>
                        </a>
                    </td>
                  </tr>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                  <pagination :data="providers" @pagination-change-page="paginate"></pagination>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="addNewProvider" tabindex="-1" role="dialog" aria-labelledby="addNewProviderLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addNewProviderLabel">New Provider</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form @submit.prevent='createProvider'>
                <div class="modal-body">
                    <div class="form-group">
                        <input v-model="form.provider_name" type="text" name="provider_name" placeholder="Name"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('provider_name') }">
                        <has-error :form="form" field="provider_name"></has-error>
                    </div>
                </div> 
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Create</button>
                        <!--<button type="submit" class="btn btn-primary">Update</button>-->
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                updateState: false,
                providers : {},
                form: new Form({
                    provider_name: ''
                })      
            }
        },
        methods: {
            addProvider(){
                this.updateState=false;
                this.form.reset();
                $('#addNewProvider').modal('show')
            },
            loadProviders(){
                axios.get('api/provider').then(({data}) => (this.providers = data));
            },
            createProvider(){
                this.$Progress.start();
                this.form.post('api/provider').then(()=>{
                $('#addNewProvider').modal('hide')
                Fire.$emit('reloadAfter');
                Toast.fire({
                    type: 'success',
                    title: 'Successfully added provider'
                })
                this.$Progress.finish();
                })  
            },
            paginate(page = 1) {
			axios.get('api/provider?page=' + page)
				.then(response => {
					this.providers = response.data;
				});
		    }
        },
        mounted() {
            this.loadProviders();
            Fire.$on('reloadAfter',() => {
                this.loadProviders();
            });
        }
    }
</script>
