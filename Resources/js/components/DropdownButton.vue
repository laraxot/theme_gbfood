<template>
  <div class="dropdown" v-bind:class="{ open }">
    <button ref="button" type="button"
            v-bind:class="[ 'btn', btnClass, 'dropdown-toggle' ]"
            aria-haspopup="true"
            v-bind:aria-expanded="open ? 'true' : 'false'"
            v-on:click="toggle"
            v-on:keydown="keyDown">
      {{ text }}
    </button>
    <div v-if="open" class="dropdown-backdrop" v-on:click="close">
    </div>
    <ul ref="menu"
        class="dropdown-menu"
        v-on:click="close"
        v-on:keydown="keyDown">
      <slot></slot>
    </ul>
  </div>
</template>
<script>
export default {
  props: {
    btnClass: { type: String, default: 'btn-default' },
    text: String
  },
  data() {
    return {
      open: false
    }
  },
  methods: {
    toggle() {
      this.open = !this.open;
    },
    close() {
      this.open = false;
    }
  }
}
</script>