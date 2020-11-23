<template>
    <div>
        <!-- Begin Top Author Meta
================================================== -->
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 col-md-offset-2">
                    <div class="mainheading">
                        <div class="row post-top-meta authorpage">
                            <div class="col-md-10 col-xs-12">
                                <h1>{{ user.name }}</h1>
                                <span class="author-description">{{
                                    user.biography
                                }}</span>
                                <div class="sociallinks">
                                    <a
                                        target="_blank"
                                        href="https://www.facebook.com/wowthemesnet/"
                                        ><i class="fa fa-facebook"></i
                                    ></a>
                                    <span class="dot"></span>
                                    <a
                                        target="_blank"
                                        href="https://plus.google.com/s/wowthemesnet/top"
                                        ><i class="fa fa-google-plus"></i
                                    ></a>
                                </div>
                                <a
                                    target="_blank"
                                    href="https://twitter.com/wowthemesnet"
                                    class="btn follow"
                                    >Follow</a
                                >
                            </div>
                            <div class="col-md-2 col-xs-12">
                                <img
                                    class="author-thumb"
                                    src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x"
                                    alt="Sal"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top Author Meta
================================================== -->

        <!-- Begin Author Posts
================================================== -->
        <div class="graybg authorpage">
            <div class="container-fluid">
                <div class="listrecent listrelated">
                    <!-- begin post -->
                    <div
                        class="authorpostbox"
                        v-for="post in posts"
                        :key="post.id"
                    >
                        <div class="card">
                            <router-link
                                :to="{
                                    name: 'post',
                                    params: { slug: post.slug }
                                }"
                            >
                                <img
                                    class="img-fluid img-thumb"
                                    src="assets/blog/img/demopic/10.jpg"
                                    alt=""
                                />
                            </router-link>
                            <div class="card-block">
                                <h2 class="card-title">
                                    <router-link
                                        :to="{
                                            name: 'post',
                                            params: { slug: post.slug }
                                        }"
                                        v-text="post.title"
                                    ></router-link>
                                </h2>
                                <h4
                                    class="card-text"
                                    v-text="post.extract"
                                ></h4>
                                <div class="metafooter">
                                    <div class="wrapfooter">
                                        <span class="meta-footer-thumb">
                                            <router-link
                                                :to="{
                                                    name: 'author',
                                                    params: { id: user.id }
                                                }"
                                                ><img
                                                    class="author-thumb"
                                                    src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x"
                                                    alt="Sal"
                                            /></router-link>
                                        </span>
                                        <span class="author-meta">
                                            <span class="post-name"
                                                ><router-link
                                                    :to="{
                                                        name: 'author',
                                                        params: { id: user.id }
                                                    }"
                                                    >{{
                                                        user.name
                                                    }}</router-link
                                                ></span
                                            ><br />
                                            <span class="post-date">{{
                                                post.created_at
                                            }}</span
                                            ><span class="dot"></span
                                            ><span class="post-read"
                                                >6 min read</span
                                            >
                                        </span>
                                        <span class="post-read-more"
                                            ><router-link
                                                :to="{
                                                    name: 'post',
                                                    params: { slug: post.slug }
                                                }"
                                                v-text="post.title"
                                                title="Read Story"
                                                ><svg
                                                    class="svgIcon-use"
                                                    width="25"
                                                    height="25"
                                                    viewbox="0 0 25 25"
                                                >
                                                    <path
                                                        d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z"
                                                        fill-rule="evenodd"
                                                    ></path></svg></router-link
                                        ></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end post -->
                </div>
            </div>
        </div>
        <!-- End Author Posts
================================================== -->
    </div>
</template>

<script>
export default {
    props: ["id"],
    data() {
        return {
            posts: [],
            user: {}
        };
    },
    created() {
        axios
            .get("/api/author/" + this.id)
            .then(response => {
                this.user = response.data;
                this.posts = response.data.posts;
            })
            .catch(e => {
                console.log(e);
            });
    }
};
</script>
