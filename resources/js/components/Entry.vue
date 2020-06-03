<script>
  module.exports = {
    props: ['user_id'],
    data: function() {
      return {

      }
    }
  }
</script>

<template>
  <div class="jumbotron py2">
    <h1 class="my2">How are you feeling?</h1>
    <p class="lead">I feel <magic-input name="mood"></magic-input> because <magic-input name="phrase"></magic-input>.</p>
    <input type="hidden" name="user_id" :value="user_id">
    <button class="btn btn-success">Save</button>
  </div>
</template>
