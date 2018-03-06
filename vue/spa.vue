window.onload = function() {
  // ルートオプションを渡してルーターインスタンスを生成します
  var router = new VueRouter({
    // 各ルートにコンポーネントをマッピングします
    // コンポーネントはVue.extend() によって作られたコンポーネントコンストラクタでも
    // コンポーネントオプションのオブジェクトでも構いません
    routes: [
      {
        path: '/top',
        component: {
          template: '<div>トップページです。</div>'
        }
      },
      {
        path: '/users',
        component: {
          template: '<div>ユーザー一覧ページです。</div>'
        }
      }
    ]
  });

  // ルーターのインスタンスをrootとなるVueインスタンスに渡します
  var app = new Vue({
    router: router
  }).$mount('#app');

  window.router = router;
};
