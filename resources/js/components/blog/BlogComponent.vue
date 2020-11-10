<template>
    <div class="container">
        <!-- Begin Site Title
	================================================== -->
        <div class="mainheading">
            <h1 class="sitetitle">Mediumish</h1>
            <p class="lead">
                Bootstrap theme, medium style, simply perfect for bloggers
            </p>
        </div>
        <!-- End Site Title
    ================================================== -->

        <!-- Begin Featured
	================================================== -->
        <featured-component></featured-component>
        <!-- End Featured
	================================================== -->

        <!-- Begin List Posts
	================================================== -->
        <post-component></post-component>
        <!-- End List Posts
	================================================== -->
    </div>
    <!-- /.container -->
</template>

<script>
export default {
    mounted() {
        console.log("Component mounted.");
    }
};
</script>
