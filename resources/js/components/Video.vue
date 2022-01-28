<template>
    <div class="col-sm-6 col-md-4">
        <div class="service_blog">
            <div class="service_icons">
                <img width="75" height="75" src="" alt="#" />
            </div>
            <div class="full">
                <h4>{{ video.title }}</h4>
            </div>
            <div class="full">
                <p>
                    {{ video.description }}
                </p>
            </div>
            <div class="full">
                <a
                    class="hvr-radial-out button-theme"
                    :href="`videos/${video.id}`"
                    >Watch</a
                >
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["video"],
};
</script>
