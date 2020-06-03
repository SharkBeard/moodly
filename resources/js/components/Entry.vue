<script>
  module.exports = {
    data: function() {
      return {
        feelings: [],
        phrases: []
      }
    }
  }
</script>

<template>
  <div class="jumbotron py2">
    <h1 class="my2">How are you feeling?</h1>
    <p class="lead">I feel <magic-input name="mood"></magic-input> because <magic-input name="phrase"></magic-input>.</p>
  </div>
</template>
