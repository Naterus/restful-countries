<template>

    <section class="bg-home">
        <div class="bg-overlay"></div>
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="title-heading text-center text-white">
                                <h1 class="heading font-weight-bold mb-4">Restful Countries API</h1>
                                <p class="small-title text-light mb-3">
                                    We provide you with detailed and useful information on countries including their states, presidents, flag, population, covid19 stats and others.
                                </p>
                                <div class="text-center mt-5">
                                    <a :href="documentationUrl"><button class="btn-submit">Explore Endpoints</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</template>

<script>
import DocUrl from "../models/DocUrl";
export default {
    name: "welcome",
    data() {
        return {
            documentationUrl: ''
        }
    },
    created() {
        DocUrl.getUrl(documentationUrl => this.documentationUrl = documentationUrl);
    },
    metaInfo() {
        return {
            title: "Restful Countries | Home",
            meta: [
                { property: 'og:title', content: "Restful Countries | Home"},
            ]
        }
    }
}
</script>


<style scoped>

</style>
