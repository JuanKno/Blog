<template>
    <div>
        <navbar-component></navbar-component>

        <div class="container">

            <transition name="slide-fade" mode="out-in">
                <router-view></router-view>
            </transition>
        </div>
        <!-- /.container -->
    </div>
</template>

<script>
import NavbarComponent from "./NavbarComponent.vue";
export default {
    components: { NavbarComponent },
    mounted() {}
};
</script>
