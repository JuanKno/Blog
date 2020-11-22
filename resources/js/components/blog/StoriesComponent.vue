<template>
    <section class="recent-posts">
        <div class="section-title">
            <h2><span>All Stories</span></h2>
        </div>
        <div class="card-columns listrecent">
            <!-- begin post -->
            <div
                class="card card-stories"
                v-for="storie in stories"
                :key="storie.id"
            >
                <router-link
                    :to="{ name: 'post', params: { slug: storie.slug } }"
                >
                    <img
                        class="img-fluid"
                        src="assets/blog/img/demopic/7.jpg"
                        :alt="storie.title"
                    />
                </router-link>
                <div class="card-block">
                    <h2 class="card-title">
                        <router-link
                            :to="{
                                name: 'post',
                                params: { slug: storie.slug }
                            }"
                            >{{
                                storie.title | truncate(60, "...")
                            }}</router-link
                        >
                    </h2>
                    <h4 class="card-text">
                        {{ storie.extract | truncate(105, "...") }}
                    </h4>
                    <div class="metafooter">
                        <div class="wrapfooter">
                            <span class="meta-footer-thumb">
                                <router-link :to="{name:'author', params:{id: storie.user.id}}"
                                    ><img
                                        class="author-thumb"
                                        src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x"
                                        alt="Sal"
                                /></router-link>
                            </span>
                            <span class="author-meta">
                                <span class="post-name"
                                    ><router-link :to="{name:'author', params:{id: storie.user.id}}">{{
                                        storie.user.name
                                    }}</router-link></span
                                ><br />
                                <span class="post-date">{{
                                    storie.created_at
                                }}</span
                                ><span class="dot"></span
                                ><span class="post-read">6 min read</span>
                            </span>
                            <span class="post-read-more"
                                ><router-link
                                    :to="{
                                        name: 'post',
                                        params: { slug: storie.slug }
                                    }"
                                    title="Read Story"
                                >
                                    <svg
                                        class="svgIcon-use"
                                        width="25"
                                        height="25"
                                        viewbox="0 0 25 25"
                                    >
                                        <path
                                            d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z"
                                            fill-rule="evenodd"
                                        ></path>
                                    </svg>
                                </router-link>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end post -->
        </div>
        <nav aria-label="Page navigation">
            <ul class="pagination">
                <li class="page-item" v-if="pagination.current_page > 1">
                    <a
                        class="page-link"
                        href="#"
                        @click.prevent="changePage(pagination.current_page - 1)"
                    >
                        <span>Atras</span>
                    </a>
                </li>

                <li
                    v-for="page in pagesNumber"
                    :key="page"
                    :class="page == isActive ? 'page-item active' : 'page-item'"
                >
                    <a
                        class="page-link"
                        href="#"
                        @click.prevent="changePage(page)"
                        >{{ page }}</a
                    >
                </li>

                <li
                    class="page-item"
                    v-if="pagination.current_page < pagination.last_page"
                >
                    <a
                        class="page-link"
                        href="#"
                        @click.prevent="changePage(pagination.current_page + 1)"
                        ><span>Siguinte</span></a
                    >
                </li>
            </ul>
        </nav>
    </section>
</template>

<script>
export default {
    data() {
        return {
            stories: [],
            pagination: {
                total: 0,
                current_page: 0,
                per_page: 0,
                last_page: 0,
                from: 0,
                to: 0
            },
            offset: 2
        };
    },
    computed: {
        isActive: function() {
            return this.pagination.current_page;
        },
        pagesNumber: function() {
            if (!this.pagination.to) {
                return [];
            }
            var from = this.pagination.current_page - this.offset;
            from < 1 ? (from = 1) : (from = from);

            var to = from + this.offset * 2;
            to >= this.pagination.last_page
                ? (to = this.pagination.last_page)
                : (to = to);

            var pagesArray = [];
            while (from <= to) {
                pagesArray.push(from);
                from++;
            }
            return pagesArray;
        }
    },
    methods: {
        listStories: function(page) {
            axios
                .get("/api/stories?page=" + page)
                .then(response => {
                    this.stories = response.data.stories.data;
                    this.pagination = response.data.pagination;
                    // console.log(this.pagination);
                })
                .catch(e => {
                    console.log(e);
                });
        },
        changePage: function(page) {
            this.pagination.current_page = page;
            this.listStories(page);
        }
    },
    created() {
        this.listStories();
    },
    mounted() {}
};
</script>
