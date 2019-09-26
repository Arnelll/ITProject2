<template>
    <div class="container">
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Mechanics</h3>
                <div class="card-tools">
                    <button class="btn btn-success" @click="addModal()">
                        Add New Mechanic
                        <i class="fas fa-user-plus fa-fw"></i>
                    </button>
                    
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tr>
                    <th>Mechanic ID</th>
                    <th>Mechanic Name</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Action</th>
                  </tr>
                  <tr v-for="mechanic in mechanics.data" :key="mechanic.id">
                    <td>{{mechanic.id}}</td>
                    <td>{{mechanic.name}}</td>
                    <td>{{mechanic.contact}}</td>
                    <td>{{mechanic.email}}</td>
                    <td>
                        <a href="#" @click="updateModal(mechanic)">
                            <i class="fa fa-edit text-cyan"></i>
                        </a>

                        <a href="#">
                            <i class="fas fa-eye text-teal"></i>
                        </a>
                    </td>
                  </tr>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                  <pagination :data="products" @pagination-change-page="paginate"></pagination>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="addNewProduct" tabindex="-1" role="dialog" aria-labelledby="addNewProductLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addNewProductLabel">New Mechanic</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form @submit.prevent="updateState ? updateMechanic() : createMechanic()">
                <div class="modal-body">
                    <div class="form-group">
                        <input v-model="form.name" type="text" name="name" placeholder="Name"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                        <has-error :form="form" field="name"></has-error>
                    </div>

                    <div class="form-group">
                        <input v-model="form.email" type="text" name="email" placeholder="Email"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                        <has-error :form="form" field="email"></has-error>
                    </div>

                    <div class="form-group">
                        <input v-model="form.contact" type="text" name="contact" placeholder="Contact"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('contact') }">
                        <has-error :form="form" field="contact"></has-error>
                    </div>

                    <!-- <div class="form-group">
                        <select name="specialty" v-model="form.specialty" id="specialty" class="form-control" :class="{
                        'is-invalid': form.errors.has('specialty') }">
                            <option value="" selected disabled>Select Specialty</option>
                            <option v-for="mechanic in mechanics.data" :value="mechanic.specialty">{{mechanic.specialty}}</option>
                        </select>
                    </div> -->

                    <div class="form-group">
                        <input v-model="form.specialty" type="text" name="specialty" placeholder="Specialty"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('specialty') }">
                        <has-error :form="form" field="specialty"></has-error>
                    </div>
               
                </div> 
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button v-show="!updateState" type="submit" class="btn btn-primary">Create</button>
                        <button v-show="updateState" type="submit" class="btn btn-primary">Update</button>
                    </div>
            </form>
            </div>
        </div>
        </div>
    </div>
</template>
<script type="text/javascript" src="node_modules/vuejs/dist/vue.min.js"></script>
<script type="text/javascript" src="node_modules/vue-simple-search-dropdown/dist/vue-simple-search-dropdown.min.js"></script>
<script>
    export default {
        data(){
            return{
                updateState: false,
                mechanics : {},
                form: new Form({
                    name: '',
                    contact: '',
                    specialty: ''
                })
                    
            }
        },
        methods: {
            updateMechanic(){
                this.$Progress.start();
                this.form.put('/api/mechanic/'+this.form.id).then(()=>{
                    Swal.fire(
                            'Updated!',
                            'Product has been updated.',
                            'success'
                            )
                    this.$Progress.finish();
                    $('#addNewProduct').modal('hide')
                    Fire.$emit('reloadAfter');  
                }).catch(()=>{
                    
                });

            },
            createMechanic(){
                this.$Progress.start();
                this.form.post('api/mechanic').then(()=>{
                $('#addNewProduct').modal('hide')
                Fire.$emit('reloadAfter');
                Toast.fire({
                    type: 'success',
                    title: 'Successfully added product'
                })
                this.$Progress.finish();
                })
            },
            addModal(){
                this.updateState=false;
                this.form.reset();
                $('#addNewProduct').modal('show')
            },
            updateModal(mechanic){
                this.updateState=true;
                this.form.reset();
                $('#addNewProduct').modal('show')
                this.form.fill(mechanic);
            },
            loadMechanic(){
                axios.get('api/mechanic').then(({data}) => (this.mechanics = data)); 
            },
            paginate(page = 1) {
			axios.get('api/mechanic?page=' + page)
				.then(response => {
					this.mechanics = response.data;
				});
		    }
        },
        mounted() {
            Fire.$on('search', () => {
                let query = this.$parent.search;
                axios.get('api/findMe?q=' + query)
                .then((data)=>{
                    this.mechanics = data.data
                })
                .catch(()=>{

                });
            });
            this.loadMechanic();
            Fire.$on('reloadAfter',() => {
                this.loadMechanic();
            });
        }
    }
</script>
