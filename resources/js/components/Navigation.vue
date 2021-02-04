<template>

    <!-- Navigation Bar-->
    <header  id="topnav" class="defaultscroll scroll-active">
        <!-- Tagline STart -->
        <div class="tagline">
            <div class="container">
                <div class="float-left">
                    <div class="email">
                        <a href="mailto:support@restfulcountries.com">
                            <i class="fa fa-envelope"></i> support@restfulcountries.com
                        </a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- Tagline End -->
        <!-- Menu Start -->
        <div class="container">
            <!-- Logo container-->
            <div>
                <a href="#" class="logo">
                <img  alt="Restful Countries" src="/assets/images/logo/logo-white.png" class="logo-light" height="60" />
                <img  alt="Restful Countries" src="/assets/images/logo/logo-w-b.png" class="logo-dark" height="60" />
                </a>
            </div>

            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li>
                        <router-link :to="{name:'home'}" class="navbar-item" exact>
                            Home
                        </router-link>
                    </li>
                    <li>
                        <a :href="documentationUrl" class="navbar-item">
                            Documentation
                        </a>
                    </li>
                    <li>
                        <router-link :to="{name:'feedback'}" class="navbar-item" exact>
                            Feedback
                        </router-link>
                    </li>
                    <li>
                        <router-link :to="{name:'donate'}" class="navbar-item" exact>
                            Donate
                        </router-link>
                    </li>

                </ul><!--end navigation menu-->
            </div><!--end navigation-->
        </div><!--end container-->
        <!--end end-->
    </header><!--end header-->
    <!-- Navbar End -->

</template>

<script>
import DocUrl from "../models/DocUrl";

export default {
    name: "Navigation",
    data() {
        return {
            documentationUrl: ''
        }
    },
    created() {
        DocUrl.getUrl(documentationUrl => this.documentationUrl = documentationUrl);
    }
}
</script>

<style scoped>

</style>
