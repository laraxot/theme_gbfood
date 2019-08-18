<template>
    <div>
        <h3>
            Hello FontAwesome
            <i class="fa fa-exclamation"/>
            <i class="fas fa-star"/>
            <i class="far fa-star"/>
            <i class="fab fa-linux"/>
        </h3>
    </div>
</template>

<script>
export default {
    name: "FontAwesome"
};
</script>

<style lang="scss">
    $fa-font-path : "~@fortawesome/fontawesome-free-webfonts/webfonts";
    @import "~@fortawesome/fontawesome-free-webfonts/scss/fontawesome.scss";
    @import "~@fortawesome/fontawesome-free-webfonts/scss/fa-solid.scss";
    @import "~@fortawesome/fontawesome-free-webfonts/scss/fa-regular.scss";
    @import "~@fortawesome/fontawesome-free-webfonts/scss/fa-brands.scss";
</style>