<template>
    <section class="bg-half page-next-level">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class=" text-white f-14">
                        <div class="mb-4">
                            <h1 class="text-uppercase mb-4 text-center">Api Token Request</h1>
                            <p>Request authorization token to get complete access to Api.</p>
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
                                           required>
                                    <div class="error_message" v-text="form.errors.get('email')"></div>

                                </div>

                                <div class="form-group">
                                    <label>Website URL </label>
                                    <input type="text" class="form-control" name="website" v-model="form.website" placeholder="Website URL">
                                    <div class="error_message" v-text="form.errors.get('website')"></div>

                                </div>
                                <div class="form-group">

                                    <button class="btn-submit">Submit</button>
                                </div>

                            </form>
                            <div class="refresh">
                                Click here to <router-link :to="'/refresh-access-token'" exact>
                                refresh your token !</router-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
</template>

<script>
import Form from "../core/Form";

export default {
    name: "RequestToken",
    data(){
        return{
            form : new Form({
                email: '',
                website:''
            }),
            error_message:'',
            success_message:'',
            token:'',
            hasError:false,
            hasSuccess:false,
            hasToken:false,
        }
    },
    methods:{
        onSubmit(){
            axios.post("/request-access-token/generate-token",this.form)
                .then(response => {this.form.reset(), this.onSuccess(response.data) })
                .catch(error => {
                    this.form.errors.record(error.response.data);
                    if (error.response.status !== 422){
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

    },

    metaInfo() {
        return {
            title: "Restful Countries | Request token",
            meta: [
                { property: 'og:title', content: "Restful Countries | Request token"},
            ]
        }
    }
}
</script>

<style scoped>

</style>
