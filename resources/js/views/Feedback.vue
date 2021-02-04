<template>

    <!-- Start home -->
    <section class="bg-half page-next-level">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="text-white f-14">
                        <div class="text-center mb-4">
                            <h1 class="heading font-weight-bold mb-4">Feedback</h1>

                            <p>Did you notice a bug or incorrect data supplied by our API? Would you like to recommend a new feature? Or do you simply want to send us a message? Please fill the form below.</p>
                        </div>

                        <div class="home-form-position">
                            <form v-on:submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)" >
                                <div class="form-group">
                                    <label>Email Address </label>
                                    <input type="email" class="form-control" v-model="form.email" name="email" required>
                                    <div class="error_message" v-text="form.errors.get('email')"></div>
                                </div>
                                <div class="form-group">
                                    <label>Feedback Category</label>
                                    <select class="form-control" name="feedback_category" @change="form.errors.clear('feedback_category')" v-model="form.feedback_category" required>
                                        <option>Select category</option>
                                        <option value="New Feature">New Feature</option>
                                        <option value="Bug">Bug</option>
                                        <option value="Appraisal">Appraisal</option>
                                        <option value="Data Error">Data Error</option>
                                        <option value="Rate Limiting">Rate Limiting</option>
                                        <option value="Others">Others</option>
                                    </select>
                                    <div class="error_message" v-text="form.errors.get('feedback_category')"></div>
                                </div>
                                <div class="form-group">
                                    <label>Feedback</label>
                                    <textarea name="feedback" class="form-control" v-model="form.feedback" required></textarea>
                                    <div class="error_message" v-text="form.errors.get('feedback')"></div>

                                </div>
                                <div class="form-group">
                                <button class="btn-submit"  :disabled="form.errors.any()">Submit</button>
                                </div>
                            </form>
                            <div class="mt-4">
                                <p>Note : New feature suggestions would only be added to subsequent releases, older Api versions
                                    would remain intact.</p>
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
    name: "Feedback",
    data(){
        return {
            form : new Form({
                email:"",
                feedback:"",
                feedback_category:""
            })
        }
    },

    methods: {
        onSubmit(){
            axios.post("/feedback/submit",this.form)
                .then(response => {this.form.reset(),this.alertMessage(response.data) })
                .catch(error => { this.form.errors.record(error.response.data) });
        },
        alertMessage(message){
            this.$swal("Feedback Successful!", message.success , "success");
        }
    },
    metaInfo() {
        return {
            title: "Restful Countries | Feedback",
            meta: [
                { property: 'og:title', content: "Restful Countries | Feedback"},
            ]
        }
    }
}
</script>

<style scoped>

</style>
