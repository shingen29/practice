// ユーザー詳細ページのコンポーネント定義
var User = {
  template:
    '<div class="user">' +
      '<h2>ユーザーIDは {{ $route.params.userId }} です。</h2>' +
      '<router-link :to="\'/user/\' + $route.params.userId + \'/profile\'">ユーザーのプロフィールページを見る</router-link>' +
      '<router-link :to="\'/user/\' + $route.params.userId + \'/posts\'">ユーザーの投稿ページを見る</router-link>' +
      '<router-view></router-view>' +
    '</div>'
}

// ユーザー詳細ページ内で部分的に表示されるユーザーのプロフィールページ
var UserProfile = {
  template:
    '<div class="user-profile">' +
      '<h3>こちらはユーザー {{ $route.params.userId }} のプロフィールページです。</h3>' +
    '</div>'
}

// ユーザー詳細ページ内で部分的に表示されるユーザーの投稿ページ
var UserPosts = {
  template:
    '<div class="user-posts">' +
      '<h3>こちらはユーザー {{ $route.params.userId }} の投稿ページです。</h3>' +
    '</div>'
}

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
    },
    {
      path: '/user/:userid',
      name: 'user',
      component: User,
      children: [
        {
          path: 'profile',
          component: UserProfile
        },
        {
          path: 'posts',
          component: UserPosts
        }
      ]
    },
  ]
})

// ルーターのインスタンスをrootとなるVueインスタンスに渡します
var app = new Vue({
  router: router
}).$mount('#app')

window.router = router
