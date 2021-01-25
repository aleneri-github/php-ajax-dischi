import Vue from 'vue';
const axios = require('axios').default;

var root = new Vue(
  {
    el: '#root',
    data: {
      discs: [],
    },
    methods: {
    },
    mounted: function() {
      const self = this;
      axios
        .get("server.php")
        .then(function(response) {
        self.discs = response.data;
        console.log(response);

        }
      );
    }
  }
)
