<template>
   <div class="col-md-6">
        <div class="datepicker-input input-group date">
            <input type="text" class="datepicker" date-format="d/m/Y">
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
                <i class="fa fa-pencil"></i>
            </span>
        </div>
    </div>
</template>

<script>
require('jquery-ui/ui/widgets/datepicker.js');
require('webpack-jquery-ui/datepicker');
export default {
    name: "TestComponent",
    props: [ 'dateFormat' ],
    mounted: function() {
        console.log('mounted');
        console.log(this);
        $(this.$el).datepicker({
            dateFormat: this.dateFormat
        });
    }
};
</script>

<style lang="scss">
   @import '~jquery-ui/themes/base/all.css';
</style>