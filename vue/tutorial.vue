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
};
