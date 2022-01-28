<template>
    <div>
        <section class="resource-control" style="margin-top: 60px">
            <div class="container">
                <div class="row">
                    <div class="col-6 pl-0">
                        <div class="full">
                            <select v-model="category" @change="setVideos">
                                <option selected :value="categories.all">
                                    All
                                </option>
                                <option :value="categories.SO">
                                    System Operation
                                </option>
                                <option :value="categories.SL">
                                    System Lines
                                </option>
                                <option :value="categories.EM">
                                    Electrical Maintainance
                                </option>
                                <option :value="categories.PCM">
                                    Protection, Control, & Metering
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6 pr-0">
                        <div
                            class="full d-flex"
                            style="justify-content: flex-end"
                        >
                            <input
                                type="text"
                                placeholder="Search videos"
                                v-model="searchText"
                                @input="setSearchResults"
                            />
                            <button>Enter</button>
                        </div>
                        {{ searchText }}
                    </div>
                </div>
            </div>
        </section>
        <!-- videos section -->
        <div class="section layout_padding" style="padding-top: 0">
            <div class="container">
                <div class="row">
                    <div class="row margin-top_30 text-center" v-if="loading">
                        <p>loading ...</p>
                    </div>
                    <div class="row margin-top_30" v-else>
                        <Video
                            :key="video.id"
                            v-for="video in searchResults"
                            :video="video"
                        ></Video>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Video from "./Video.vue";

export default {
    components: {
        Video,
    },
    data() {
        return {
            videos: null,
            searchResults: null,
            loading: true,
            searchText: "",
            category: "/all",
            categories: {
                all: "/",
                PCM: "/pcm",
                EM: "/em",
                SL: "/sl",
                SO: "/so/category",
            },
        };
    },
    methods: {
        setVideos() {
            console.log("ANS", this.category);
            const res = fetch(
                "http://localhost:8000/api/videos" + this.category
            );
            res.then((data) => {
                data.json().then((result) => {
                    console.log("result_ of _ category", result);
                    this.loading = false;
                    this.videos = result;
                    this.searchResults = this.videos;
                });
            }).catch((err) => console.log("ERR => ", err));
        },

        setSearchResults() {
            if (this.searchText === "") {
                this.searchResults = this.videos;
                return;
            }
            this.searchResults = [...this.videos].filter(
                (video) =>
                    video.title
                        .toLowerCase()
                        .indexOf(this.searchText.toLowerCase()) !== -1
            );
        },
    },
    mounted() {
        const res = fetch("http://localhost:8000/api/videos");
        res.then((data) => {
            data.json().then((result) => {
                console.log("result", result);
                this.loading = false;
                this.videos = result;
                this.searchResults = this.videos;
            });
        });
        console.log("Component mounted.", this.videos);
    },
};
</script>
