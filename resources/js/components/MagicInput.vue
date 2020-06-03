<script>
  module.exports = {
    props: ['id', 'focused', 'name'],
    data: function() {
      return {
        classes: ['text-center', 'text-monospace'],
        off_classes: ["border-left-0", "border-right-0", "border-top-0",
          "bg-transparent", "border-dark"],
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
      focusOn: function() {
        this.focus = true;
      },
      focusOff: function() {
        this.focus = false;
      }
    }
  }
</script>

<template>
  <input v-model="text" :name="name" :class="effective_classes" @focus="focusOn"
                       @blur="focusOff" @change="$emit('updated', text)">
</template>
