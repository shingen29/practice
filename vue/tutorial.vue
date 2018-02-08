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

  // Todo
  new Vue({
    el: '#todo',
    data: {
      input: '',
      todos: [
        { text: 'Add some todos' }
      ]
    },
    methods: {
      add: function() {
        var text = this.input.trim()
        if (text) {
          this.todos.push({ text: text })
          this.input = ''
        }
      },
      remove: function (index) {
        this.todos.splice(index, 1)
      },
    }
  });

  // Component
  var Child = Vue.extend({
    template: '<div>A Custom Component!</div>'
  });

  new Vue({
    el: '#component',
    components: {
      'my-component': Child,
    }
  });
};
