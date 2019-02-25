<template>
    <div class="container">
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Client Table</h3>
                <div class="card-tools">
                    <button class="btn btn-success" data-toggle="modal" data-target="#addNewClient">
                        Add New
                        <i class="fas fa-user-plus fa-fw"></i>
                    </button>
                    
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Creation Date</th>
                    <th>Modify</th>
                  </tr> 
                  <tr v-for="user in users" :key="user.id"> <!-- v-if="user.role == 'Customer' #For filtering-->
                    <td>{{user.id}}</td>
                    <td>{{user.name | upFirstLetter}}</td>
                    <td>{{user.email | upFirstLetter}}</td>
                    <td>{{user.role | upFirstLetter}}</td>
                    <td>{{user.created_at | readableDate}}</td>
                    <td>
                        <a href="#">
                            <i class="fa fa-edit"></i>
                        </a>
                        
                        <a href="#">
                            <i class="fa fa-trash"></i>
                        </a>

                        <a href="#">
                            <i class="fas fa-eye"></i>
                        </a>
                    </td>
                  </tr>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="addNewClient" tabindex="-1" role="dialog" aria-labelledby="addNewClientLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addNewClientLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form @submit.prevent="createUser">
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
                        <input v-model="form.password" type="password" name="password" placeholder="Password"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('password') }">
                        <has-error :form="form" field="password"></has-error>
                    </div>

                    <div class="form-group">
                        <select name="role" v-model="form.role" id="role" class="form-control" :class="{
                        'is-invalid': form.errors.has('role') }">
                            <option value="">Select User Role</option>
                            <option value="Administrator">Administrator</option>
                            <option value="Secretary">Secretary</option>
                            <option value="Customer">Customer</option>
                        </select>
                        <has-error :form="form" field="role"></has-error>
                    </div>
                </div>
                
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Create</button>
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
                users : {},
                form: new Form({
                    name : '',
                    email : '',
                    password : '',
                    role : ''
                })
            }
        },
        methods: {
            loadUsers(){
                axios.get('api/user').then(({data}) => (this.users = data.data));
            },
            createUser(){
                this.form.post('api/user');
            }
            
        },
        mounted() {
            this.loadUsers();
        }
    }
</script>
