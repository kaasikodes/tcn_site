<template>
    <div>
        <section class="resource-control" style="margin-top: 60px">
            <div class="container">
                <div class="row">
                    <div class="col-6 pl-0">
                        <div class="full">
                            <select v-model="category" @change="setMaterials">
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
                                placeholder="Search materials"
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
        <!-- materials section -->
        <div class="section layout_padding" style="padding-top: 0">
            <div class="container">
                <div class="row">
                    <div class="row margin-top_30 text-center" v-if="loading">
                        <p>loading ...</p>
                    </div>
                    <div class="row margin-top_30" v-else>
                        <Material
                            :key="material.id"
                            v-for="material in searchResults"
                            :material="material"
                        ></Material>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Material from "./Material.vue";

export default {
    components: {
        Material,
    },
    data() {
        return {
            materials: null,
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
        setmaterials() {
            console.log("ANS", this.category);
            const res = fetch(
                "http://localhost:8000/api/materials" + this.category
            );
            res.then((data) => {
                data.json().then((result) => {
                    console.log("result_ of _ category", result);
                    this.loading = false;
                    this.materials = result;
                    this.searchResults = this.materials;
                });
            }).catch((err) => console.log("ERR => ", err));
        },

        setSearchResults() {
            if (this.searchText === "") {
                this.searchResults = this.materials;
                return;
            }
            this.searchResults = [...this.materials].filter(
                (material) =>
                    material.name
                        .toLowerCase()
                        .indexOf(this.searchText.toLowerCase()) !== -1
            );
        },
    },
    mounted() {
        const res = fetch("http://localhost:8000/api/materials");
        res.then((data) => {
            data.json().then((result) => {
                console.log("result", result);
                this.loading = false;
                this.materials = result;
                this.searchResults = this.materials;
            });
        });
        console.log("Component mounted.", this.materials);
    },
};
</script>
