<template>
    <div>
        <section v-if="!home" class="resource-control" style="margin-top: 60px">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="full">
                            <select v-model="category" @change="setLectures">
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
                    <div class="col-6">
                        <div
                            class="full d-flex"
                            style="justify-content: flex-end"
                        >
                            <input
                                type="text"
                                placeholder="Search Lectures"
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
        <!-- lectures section -->
        <div class="section layout_padding" style="padding-top: 0">
            <div class="container">
                <div class="row">
                    <div class="row margin-top_30 text-center" v-if="loading">
                        <p>loading ...</p>
                    </div>
                    <div class="row margin-top_30" v-else>
                        <Lecture
                            :key="lecture.id"
                            v-for="lecture in searchResults"
                            :lecture="lecture"
                        ></Lecture>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Lecture from "./Lecture.vue";

export default {
    components: {
        Lecture,
    },
    props: ["home"],
    data() {
        return {
            lectures: null,
            searchResults: null,
            loading: true,
            searchText: "",
            category: "/all",
            categories: {
                all: "/",
                PCM: "/pcm/category",
                EM: "/em/category",
                SL: "/sl/category",
                SO: "/so/category",
            },
        };
    },
    methods: {
        setLectures() {
            console.log("ANS", this.category);
            const res = fetch(
                "http://localhost:8000/api/lectures" + this.category
            );
            res.then((data) => {
                data.json().then((result) => {
                    console.log("result_ of _ category", result);
                    this.loading = false;
                    this.lectures = result;
                    this.searchResults = this.lectures;
                });
            }).catch((err) => console.log("ERR => ", err));
        },

        setSearchResults() {
            if (this.searchText === "") {
                this.searchResults = this.lectures;
                return;
            }
            this.searchResults = [...this.lectures].filter(
                (lecture) =>
                    lecture.title
                        .toLowerCase()
                        .indexOf(this.searchText.toLowerCase()) !== -1
            );
        },
    },
    mounted() {
        const res = fetch("http://localhost:8000/api/lectures");
        res.then((data) => {
            data.json().then((result) => {
                console.log("result", result);
                this.loading = false;
                this.lectures = result;
                this.searchResults = this.lectures;
            });
        });
        console.log("Component mounted.", this.lectures);
    },
};
</script>
