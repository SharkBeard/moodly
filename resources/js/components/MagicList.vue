<script>
  module.exports = {
    props: ['name'],
    data: function() {
      return {
        inputs: [ { id: 0, value: '' } ]
      }
    },
    methods: {
      split_input: function(id, unparsed_phrase, conjunction) {
        var new_inputs = [];
        var phrases = [];
        var index = 0;

        this.inputs.forEach( function(item, i, list) {
          if (item.id == id) { phrases = unparsed_phrase.split(conjunction); } 
          else { 
            new_inputs.push({ value: item.value, id: index++ }); 
          }
        });

        phrases.forEach( function(phrase, i, list) {
          new_inputs.push( { value: phrase, id: index++ } );
        });

        console.log(new_inputs);
        this.inputs = new_inputs;
      }
    }
  }
</script>

<template>
  <span>
    <magic-input v-for="input in inputs" v-model="input.value" :key="input.id" :focused="input.value == ''" :id="input.id" @compound="split_input" :name="name+'[]'"></magic-input>
  </span>
</template>
