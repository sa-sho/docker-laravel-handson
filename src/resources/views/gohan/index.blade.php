<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ごはんカロリー計算機</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>
    <section class="hero is-info is-fullheight has-text-centered">

        <!-- メインコンテンツ -->
        <div class="hero-body">
            <div class="container">
                <div id="app" v-cloak>
                    <div class="content mb-5">
                        <a class="nav-link" href="{{ route('top') }}">Home</a>
                        <h1 class="title is-size-4">
                            <i class="fa-solid fa-bowl-rice"></i>
                            ごはんカロリー計算機
                        </h1>
                        <p class="is-size-7">お茶碗分のカロリーを計算します。
                        </p>
                    </div>
                    <div class="container" style="width: 200px;">
                        <div class="field">
                            <form>
                                <input type="text" name="rice" placeholder="0杯" style="height: 30px; width: 120px;">
                                <button type="submit">カロリーに換算</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="mb-5">
            <p>合計で{{ number_format($kcal)}}kcalです</p>
            </div>
    </section>
</body>
</html>