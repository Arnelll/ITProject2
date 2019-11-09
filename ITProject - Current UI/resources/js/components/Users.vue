<template>

    <div class="container">

        <div class="row">
            <div class="col-md-12">

                <div class="card">

                    <div class="card-header">
                        <h3 class="card-title">Users</h3>

                        <div class="card-tools">
                            <button class="btn btn-success" data-toggle="modal" data-target="#addUserModal">Add New User <i class="fas fa-user-plus"></i></button>
                        </div>
                    </div>

                    <div class="card-body table-responsive p-0">

                        <table class="table table-hover">

                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Full Name</th>
                                    <th>Type</th>
                                    <th>Date Registered</th>
                                    <th>Date Updated</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr v-for="user in users" :key="user.id">
                                    <td>{{user.id}}</td>
                                    <td>{{user.username}}</td>
                                    <td>{{user.email}}</td>
                                    <td>{{user.first_name}} {{user.last_name}}</td>
                                    <td>{{user.user_type}}</td>
                                    <td>{{user.created_at}}</td>
                                    <td>{{user.updated_at}}</td>
                                    <td>
                                        <a href="#">
                                            <i class="fas fa-file-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>

                        </table>

                    </div>

                </div>

            </div>
        </div>
    
        <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModal" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="addUserModal">Add New User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form @submit.prevent="addUser">

                        <div class="modal-body">
                            
                            <div class="form-group">
                                <input v-model="form.username" type="text" name="username" id="username" class="form-control" :class="{ 'is-invalid': form.errors.has('username') }" placeholder="Username" required>
                                <has-error :form="form" field="username"></has-error>
                            </div>

                            <div class="form-group">
                                <input v-model="form.password" type="password" name="password" id="password" class="form-control" :class="{ 'is-invalid': form.errors.has('password') }" placeholder="Password" required>
                                <has-error :form="form" field="password"></has-error>
                            </div>

                            <div class="form-group">
                                <input v-model="form.email" type="email" name="email" id="email" class="form-control" :class="{ 'is-invalid': form.errors.has('email') }" placeholder="Email" required>
                                <has-error :form="form" field="email"></has-error>
                            </div>

                            <div class="form-group">
                                <input v-model="form.first_name" type="text" name="first-name" id="first-name" class="form-control" :class="{ 'is-invalid': form.errors.has('first_name') }" placeholder="First Name" required>
                                <has-error :form="form" field="first_name"></has-error>
                            </div>

                            <div class="form-group">
                                <input v-model="form.last_name" type="text" name="last-name" id="last-name" class="form-control" :class="{ 'is-invalid': form.errors.has('last_name') }" placeholder="Last Name" required>
                                <has-error :form="form" field="last_name"></has-error>
                            </div>

                            <div class="form-group">
                                <select v-model="form.user_type" name="user-type" id="user-type" class="form-control" :class="{ 'is-invalid': form.errors.has('user_type') }">
                                    <option value="">- Select User Type -</option>
                                    <option value="Administrator">Administrator</option>
                                    <option value="Secretary">Secretary</option>
                                </select>
                                <has-error :form="form" field="user_type"></has-error>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add User</button>
                        </div>

                    </form>

                </div>
            </div>

        </div>

    </div>

</template>

<script>

    export default {

        data() {

            return {
                
                users: {},

                form: new Form({
                    username: '',
                    password: '',
                    email: '',
                    first_name: '',
                    last_name: '',
                    user_type: ''
                })

            }

        },

        methods: {

            displayUsers() {
                axios.get("api/user").then(({ data }) => (this.users = data.data));
            },

            addUser() {
                this.form.post('api/user');
            }

        },

        mounted() {
            this.displayUsers();
            console.log('Component mounted.');
        }
    }

</script>