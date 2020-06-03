<script>
  module.exports = {
    props: ['id', 'focused', 'name'],
    data: function() {
      return {
        classes: ['text-center', 'text-monospace'],
        off_classes: ["border-left-0", "border-right-0", "border-top-0",
          "bg-transparent", "border-dark"],
        compounding_words: [' and ', ' or ', ' but '],
        focus: this.focused,
        text: ""
      }
    },
    computed: {
      effective_classes: function() {
        instance = this;
        if (this.focus || this.text == '') { return instance.classes; }
        else { return instance.classes.concat(instance.off_classes); }
      }
    },
    methods: {
      removeClass: function(value) {
        var index = this.classes.indexOf(value);

        if (index >= 0) { this.classes.splice(index); }
      },
      focusOn: function() {
        this.focus = true;
      },
      focusOff: function() {
        this.focus = false;
        //this.check_word();
      },
      check_word: function() {
        var instance = this;
        this.compounding_words.forEach( function(word, index, list) {
          if (instance.text.includes(word)) { 
            phrase;
            instance.$emit('compound', instance.text); 
          }
        });
      }
    }
  }
</script>

<template>
  <input v-model="text" :name="name" :class="effective_classes" @focus="focusOn" @blur="focusOff">
</template>
