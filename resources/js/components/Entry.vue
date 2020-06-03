<script>
  module.exports = {
    props: ['user_id'],
    data: function() {
      return {
        message: { text: '', css: '' },
        mood: '',
        story: '',
        button_class: 'btn-outline-primary'
      }
    },
    methods: {
      send: function() {
        var instance = this;
        axios.post('/api/entries', {
          mood: instance.mood,
          story: instance.story,
          user_id: instance.user_id
        }).then(function(response) {
          instance.mood = '';
          instance.story = '';
          instance.button_class = 'btn-success';
          instance.message = { 
            text: 'Thanks for sharing how you feel with us. You are wonderful.',
            css: 'alert-success'
          };
        });
      },
      save: function() {
        if (this.mood == '') {
          this.message = {
            text: 'Please tell us how you are feeling',
            css: 'alert-info'
          };
          this.button_class = 'btn-outline-warning';
        } else if (this.story == '') {
          this.message = {
            text: 'Why do you feel that way?',
            css: 'alert-info'
          };
          this.button_class = 'btn-outline-warning';
        } else { this.send() }
      },
      update_mood: function(value) {
        this.mood = value;
      },
      update_story: function(value) {
        this.story = value;
      }
    }
  }
</script>

<template>
  <div class="jumbotron py2">
    <h1 class="my2">How are you feeling?</h1>
    <p class="lead">I feel <magic-input name="mood" @updated="update_mood"></magic-input> because <magic-input name="story" @updated="update_story"></magic-input>.</p>
    <input type="hidden" name="user_id" :value="user_id">
    <button class="btn" :class="button_class" @click="save">Save</button>
    <div v-if="message.text != ''" class='alert mt-2' :class="message.css">{{ message.text }}</div>
  </div>
</template>
