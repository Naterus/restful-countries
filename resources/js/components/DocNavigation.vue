<template>
    <div id="simple__navigation">

        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img alt="Restful Countries" src="/assets/images/logo/logo-w-b.png"
                    class="logo-light" height="60"/>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a :href="'/'" class="nav-link">Home </a>
                        </li>
                        <li class="nav-item">
                            <a :href="documentationUrl" class="nav-link">
                                Documentation
                            </a>
                        </li>
                        <li class="nav-item">
                            <a :href="'/feedback'"  class="nav-link">Feedback</a>
                        </li>
                        <li class="nav-item">
                            <a :href="'/donate'" class="nav-link" >Donate</a>
                        </li>
                    </ul>
                    <div class="my-2 my-lg-0">
                        <a :href="'/request-access-token'">
                            <button class="btn btn-dark">Get Token</button>
                        </a>
                    </div>
                </div>
            </div>

        </nav>

    </div>
</template>

<script>
import DocUrl from "../models/DocUrl";

export default {
    name: "DocNavigation",
    data() {
        return {
            documentationUrl: ''
        }
    },
    created() {
    }
}
</script>

<style scoped>

</style>
