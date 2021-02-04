<template>

    <!-- Start home -->
    <section class="bg-half page-next-level">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class=" text-white f-14">
                        <div class="mb-4">
                            <h1 class="text-uppercase mb-4 text-center">Refresh Api Token</h1>
                            <p>If you already generated a token but can't access it, provide your email to get new one.</p>
                        </div>

                        <div class="home-form-position">


                            <div v-if="hasSuccess">
                                <div class="alert alert-success text-center">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>{{success_message}}</strong>
                                </div>
                                <div v-if="hasToken" style="margin: 1.5rem;">
                                    <input type="text" placeholder="API Token" id="api-token" class="api-text "
                                           v-model="token" readonly>
                                    <button class="copy-btn" v-on:click="copyMessage()" >Copy</button>
                                </div>
                            </div>

                            <div v-if="hasError" class="alert alert-danger text-center">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong>{{error_message}}</strong>
                            </div>


                            <form v-on:submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">

                            <div class="form-group">
                                <label>Email address <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="email" v-model="form.email" placeholder="Email address"
                                       >
                                <div class="error_message" v-text="form.errors.get('email')"></div>
                            </div>

                                <div class="form-group">
                                    <button class="btn-submit" >Submit</button>
                                </div>

                            </form>
                            <div class="refresh">
                                Click here to <router-link :to="'/request-access-token'" exact>
                                request for a new token !</router-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- end home -->
</template>

<script>
import Form from "../core/Form";

export default {
name: "RefreshToken",
    data(){
        return{
            form : new Form({
                email: '',
            }),
            error_message:'',
            success_message:'',
            token:'',
            hasError:false,
            hasSuccess:false,
            hasToken:false,
        }
    },
    methods: {
        onSubmit() {
            axios.post("/refresh-access-token/regenerate-token", this.form)
                .then(response => {
                    this.form.reset(), this.onSuccess(response.data)
                })
                .catch(error => {
                    this.form.errors.record(error.response.data);
                    if (error.response.status !== 422) {
                        this.onError(error.response.data);
                    }
                });
        },
        onSuccess(message){
            this.hasSuccess=true;
            this.hasError=false;
            this.success_message=message.success

            if (message.api_token){
                this.hasToken=true;
                this.token=message.api_token;
            }else{
                this.$swal("Token has been generated successfully", message.success , "success");
            }

        },
        onError(message){
            this.hasSuccess=false;
            this.hasError=true;
            this.error_message = message.error;
        },
        copyMessage(){

            let copyText = document.getElementById("api-token");
            copyText.select();
            copyText.setSelectionRange(0, 99999); /* For mobile devices */
            document.execCommand("copy");

            alert("Copied: " + copyText.value);
        }

    }
}
</script>

<style scoped>

</style>
