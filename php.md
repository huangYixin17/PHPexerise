# 先下載vs code(可從note的第6點看如何安裝以及重點)
## 打完程式儲存 (.html)

    <!doctype html>
    <html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- Responsive meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
    </head>
    <body>
    <h1>Hello, world!</h1>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
    </html>


## 上傳到github
1. 從虛擬機打指令(clone資料夾到虛擬機)(指令 git clone github的資料夾名稱)
2. 可以在pc上打 <ip位置/phpexerise/test1.html>
3. 完成
## 在pc更新test1.html檔案之後
1. 先git
2. 在虛擬機下指令 (git pull github的資料夾名稱)
3. 完成
## 編輯css檔案

<pre><code>
```css
body{
    background-color: darkgoldenrod;
}
p{
    color: brown;
    margin-left: 20px;
}

button{
    background: content-box;
}
img{
    width: 50px;
}
```
</code></pre>


## 編輯php的問題

### 編輯php 有錯誤
+ 可以到目錄 /var/log/nginx/error.log 底下看錯誤的地方

### 編輯重點

<pre><code>
'''php
    <\?php
        define('PI',3.1415926);
        $circle_area = 3 * 3 * PI;
        echo "圓面積: ".$circle_area;
    \?>
'''

</code></pre>

+ 在echo "圓面積".$name; 時的 . 是代表連接點的意思
+ 在設變數時,都要有 $ 錢錢的符號
+ 如果define某的變數,那使用上不需要 $ 的符號

#### class 編輯重點
<pre><code>
'''php
    <?php
    class dog {
        // 定義 dog 的年紀「屬性」
        public $age;
        // 定義取得 dog 年紀屬性值的「方法」
        public function getAge(){
        return $this->age;
        }
    }
    ?>
'''
</code</pre>
+ 在class編輯時,如果想要用(age)就用this來指向

<pre><code>
'''php
    <?php
        include "dog.php";
        $mydog = new dog();
        $mydog->age = 10;
        echo "我的狗年紀 : ".$mydog->getAge();
    ?>
'''
</code></pre>
+ 如果是其他php想要讀取class這個物件的話,需要include class,想要指向class的物件,就要用變數名稱指向,而不是this
