window.onload = function() {
  // Model
  new Vue({
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

  // computed
  var Tax = new Vue({
    el: '#price',
    data: {
      name: 'みかん',
      price: 100,
    },
    computed: {
      priceWithTax: function() {
        return this.price * 1.08;
      }
    }
  });
  window.tax = Tax;

  // isValid
  var valid = new Vue({
    el: '#valid',
    data: {
      name: '',
    },
    computed: {
      isValid: function() {
        return this.name.length > 0;
      }
    },
    methods: {
      /*
      updateName: function(event) {
        this.name = event.target.value;
      },
      */
      sendData: function() {
        alert(this.name);
      }
    }
  });
  window.valid = valid;

  // component
  var fruitsListChild = Vue.extend({
    template: '<h1>フルーツ一覧</h1>'
  });

  var fruitsListParent = Vue.extend({
    template: '<div>親コンポーネント<fruits-list-child></fruits-list-child></div>',
    components: {
      'fruits-list-child': fruitsListChild
    }
  });

  new Vue({
    el: "#fruits-list",
    components: {
      'fruits-list-parent': fruitsListParent
    }
  });

  // props
  Vue.component('fruits-list', {
    props: ['fruitsItem'],
    template: '<li>{{fruitsItem.name}}</li>'
  });

  new Vue({
    el: '#fruits-component',
    data: {
      fruitsItems: [
        {name: '梨'},
        {name: 'イチゴ'}
      ]
    }
  });

  var counterButton = Vue.extend({
    template: '<span>{{counter}}個<button v-on:click="addToCart">追加</button></span>',
    data: function() {
      return {
        counter: 0
      }
    },
    methods: {
      addToCart: function() {
        this.counter += 1
        this.$emit('increment')
      }
    },
  });

  new Vue({
    el: '#fruits-counter',
    components: {
      'counter-button': counterButton
    },
    data: {
      total: 0,
      fruits: [
        {name: '梨'},
        {name: 'みかん'}
      ]
    },
    methods: {
      increment: function() {
        this.total += 1
      }
    }
  });

};


