<template>
  <button v-on:click="incrementNumber">Increment</button>
  <h1>The number is {{ number }}</h1>
</template>

<script>
  export default {
    data () {
      return {
        number: 0
      }
    },

    ready() {
      setInterval(this.incrementNumber, 500);
    },

    methods: {
        incrementNumber() {
          this.number++;
        }
    }
  }
</script>

<style>
  h1 {
    font-size: 21px;
  }
</style>
