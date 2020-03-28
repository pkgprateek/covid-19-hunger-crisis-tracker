<template>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Users Table</h3>

                        <div class="card-tools">
                            <button class="btn btn-success" @click="newModal">
                                Add New
                                <i class="fas fa-user-plus fa-fw"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Registered At</th>
                                    <th>Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="user in users" :key="user.id">
                                    <td>{{user.id}}</td>
                                    <td>{{user.name}}</td>
                                    <td>{{user.username}}</td>
                                    <td>{{user.created_at | convertDate}}</td>
                                    <td>
                                        <a href="#" @click="editModal(user)">
                                            <i class="fa fa-edit blue"></i>
                                        </a>
                                        <a href="#" @click="deleteUser(user.id)">
                                            <i class="fa fa-trash red"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>

        <!-- Modal -->
        <div
            class="modal fade"
            id="addNew"
            tabindex="-1"
            role="dialog"
            aria-labelledby="addNewLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" v-show="!editmode" id="addNewLabel">Add New User</h5>
                        <h5 class="modal-title" v-show="editmode" id="addNewLabel">Update User Info</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="editmode ? updateUser() : createUser()">
                        <div class="modal-body">
                            <div class="form-group">
                                <input
                                    placeholder="Name"
                                    v-model="form.name"
                                    type="text"
                                    name="name"
                                    class="form-control"
                                    :class="{ 'is-invalid': form.errors.has('name') }"
                                />
                                <has-error :form="form" field="name"></has-error>
                            </div>
                            <div class="form-group">
                                <input
                                    placeholder="Username"
                                    v-model="form.username"
                                    type="text"
                                    name="username"
                                    class="form-control"
                                    :class="{ 'is-invalid': form.errors.has('username') }"
                                />
                                <has-error :form="form" field="username"></has-error>
                            </div>
                            <div class="form-group">
                                <input
                                    placeholder="Password"
                                    v-model="form.password"
                                    type="password"
                                    name="password"
                                    class="form-control"
                                    :class="{ 'is-invalid': form.errors.has('password') }"
                                />
                                <has-error :form="form" field="password"></has-error>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" v-show="editmode" class="btn btn-success">Update</button>
                            <button type="submit" v-show="!editmode" class="btn btn-primary">Create</button>
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
            editmode: false,
            users: {},
            form: new Form({
                id: "",
                name: "",
                username: "",
                password: ""
            })
        };
    },
    methods: {
        loadUsers() {
            axios.get("api/user").then(({ data }) => (this.users = data.data));
        },

        createUser() {
            this.$Progress.start();
            this.form
                .post("api/user")
                .then(() => {
                    Fire.$emit("UpdateUsersTable");
                    $("#addNew").modal("hide");
                    toast.fire({
                        type: "success",
                        title: "User created successfully"
                    });
                    this.$Progress.finish();
                })
                .catch(() => {
                    swal.fire(
                        "Failed",
                        "Something went wrong. Please refresh and try again.",
                        "warning"
                    );
                    this.$Progress.finish();
                });
        },

        deleteUser(id) {
            swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then(result => {
                // Send an ajax request to the server
                if (result.value) {
                    this.form
                        .delete("api/user/" + id)
                        .then(() => {
                            swal.fire(
                                "Deleted!",
                                "The user has been deleted.",
                                "success"
                            );
                            Fire.$emit("UpdateUsersTable");
                        })
                        .catch(() => {
                            swal.fire(
                                "Failed",
                                "Something went wrong. Refresh and try again.",
                                "warning"
                            );
                        });
                }
            });
        },

        newModal() {
            this.editmode = false;
            this.form.reset();
            $("#addNew").modal("show");
        },

        editModal(user) {
            this.editmode = true;
            this.form.reset();
            $("#addNew").modal("show");
            this.form.fill(user);
        },

        updateUser(id) {
            this.$Progress.start();
            this.form
                .put("api/user/" + this.form.id)
                .then(() => {
                    $("#addNew").modal("hide");
                    swal.fire(
                        "Updated!",
                        "Information has been Updated",
                        "success"
                    );
                    this.$Progress.finish();
                    Fire.$emit("UpdateUsersTable");
                })
                .catch(() => {
                    this.$Progress.fail();
                    swal.fire(
                        "Failed",
                        "Something went wrong. Refresh and try again.",
                        "warning"
                    );
                });
        }
    },

    created() {
        this.loadUsers();
        Fire.$on("UpdateUsersTable", () => {
            this.loadUsers();
        });
    }
};
</script>