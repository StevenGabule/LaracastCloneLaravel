<template>
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="card card-shadowed p-50 mb-0">
                        <h5 class="text-uppercase text-center">Login</h5>
                        <br><br>
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email" v-model="email">
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" v-model="password">
                            </div>

                            <div class="form-group flexbox py-10">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" v-model="remember" checked>
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Remember me</span>
                                </label>

                                <a class="text-muted hover-primary fs-13" href="#">Forgot password?</a>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-bold btn-block btn-primary" :disabled="!isValidLoginForm"
                                        type="submit">Login
                                </button>
                            </div>
                        </form>

                        <p class="text-center text-muted fs-13 mt-20">Don't have an account? <a
                            href="page-register.html">Sign up</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</template>

<script>
    export default {
        data() {
            return {
                email: '',
                password: '',
                remember: true,
            }
        },

        methods: {
            emailIsValid() {
                return /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(this.email);
            }
        },

        computed: {
            isValidLoginForm() {
                return this.emailIsValid() && this.password;
            }
        }
    }
</script>
