<script>
  module.exports = {
    data: function() { 
      return {
        entries: []
      }
    },
    methods: {
      getEntries: function() {
        instance = this;
        axios.get('/api/entries')
          .then( function(response) {
            instance.entries = response.data;
          });
        }
      },
    created: function() {
      this.getEntries();
    }
  }
</script>

<template>
  <div class="px-3">
    <div class="row py-2 border-top border-dark" v-for="entry in entries">
      <div class="col-3 lead border-right border-dark">
        <div class="">
          Someone was feeling <code>{{ entry.mood }}</code>
        </div>
      </div>
      <div class="col-9 px-4 py-2">
        {{ entry.story }}
      </div>
    </div>
  </div>
</template>
