window.onload = function() {
  // Model
  var demo = new Vue({
    el: '#demo',
    data: {
      message: 'Hello Vue'
    }
  });

  // List
  new Vue({
    el: '#app',
    data: {
      todos: [
        { text: 'Learn JavaScript' },
        { text: 'Learn Vue.js' },
        { text: 'Build Something Awesome' }
      ]
    }
  });

  // Event
  new Vue({
    el: '#event',
    data: {
      message: 'Hello Vue.js'
    },
    methods: {
      showMessage: function() {
        alert(this.message);
      }
    }
  });
};
