<template>
    <img alt="Vue logo" src="./assets/logo.png">
    <datepicker name="birthdate"></datepicker>
</template>
     
<script>
// https://itsolutionstuff.com/post/how-to-use-datepicker-in-vuejsexample.html
import Datepicker from 'vuejs-datepicker'
     
export default {
  name: 'date-component',
  components: {
    Datepicker
    //Datepicker: Datepicker
  }
}
//https://github.com/ankurk91/vue-flatpickr-component
</script>