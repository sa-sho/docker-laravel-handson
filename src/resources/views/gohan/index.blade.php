<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ごはん値段計算機</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        [v-cloak] {
            display: none;
        }

        .hero-body {
            background-size: cover;
            background-position: center;
            background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.7)), url(rice.webp);
        }
    </style>
</head>

<body>
    <section class="hero is-info is-fullheight has-text-centered">

        <!-- ヘッダ -->
        <div class="hero-head">
            <header class="navbar is-primary">
                <div class="container">
                    <div class="navbar-brand">
                        <a class="navbar-item is-size-4" href="">
                            ヘッダ
                        </a>
                    </div>
                </div>
            </header>
        </div>

        <!-- メインコンテンツ -->
        <div class="hero-body">
            <div class="container">
                <div id="app" v-cloak>
                    <div class="content">
                        <a class="nav-link" href="{{ route('top') }}">HOME</a>
                        <h1 class="title is-size-4">
                            <i class="fa-solid fa-bowl-rice"></i>
                            ごはん値段計算機
                        </h1>
                        <p class="is-size-7">ごはん一食当たりの値段とお茶碗何杯分かを計算します。数字を入力すると結果が即時反映されます。
                        </p>
                    </div>
                    <div class="container" style="width: 200px;">
                        <div class="field">
                            <label class="level-right">買ったお米の量（kg）</label>
                            <div class="control">
                                <input class="input has-text-weight-bold has-text-right" type="number" placeholder="5"
                                    min="1" pattern="\d*" v-model.number="weight">
                            </div>
                        </div>
                        <div class="field">
                            <label class="level-right">値段（円）</label>
                            <div class="control">
                                <input class="input has-text-weight-bold has-text-right" type="number"
                                    placeholder="2000" min="1" pattern="\d*" v-model.number="price">
                            </div>
                        </div>
                        <div class="field">
                            <label class="level-right">ごはん一食の量（g）</label>
                            <div class="control">
                                <input class="input has-text-weight-bold has-text-right" type="number" placeholder="180"
                                    min="1" pattern="\d*" v-model.number="oneWeight">
                            </div>
                        </div>
                    </div>
                    <div id="app" class="content">
                        <p class="is-size-5 has-text-weight-medium has-text-light">@{{ calculate }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- フッター -->
        <div class="hero-foot">
            <nav class="tabs is-right is-small">
                <div class="container">
                    <ul>
                        <li><a href="">フッター</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/vue@3.2.33/dist/vue.global.prod.js"></script>
    <script>
        const riceCalculator = {
    data() {
      return {
        weight: 5,
        price: 2000,
        oneWeight: 180,
      };
    },
    computed: {
      calculate() {
        if (!this.weight) {
          return `買ったお米の量を入力してください。`;
        }
        if (!this.price) {
          return `値段を入力してください。`;
        }
        if (!this.oneWeight) {
          return `ごはん一食の量を入力してください。`;
        }
        const servings = Math.floor((this.weight * 1000 * 2.2) / this.oneWeight);
        const servingsPrice = Math.floor(this.price / servings);
        return `一食当たり約${servingsPrice}円、\n お茶碗${servings}杯分です。`;
      },
    },
  };
  
  Vue.createApp(riceCalculator).mount("#app");
    </script>
</body>

</html>