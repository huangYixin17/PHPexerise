+ 編輯php 有錯誤
+ 安裝composer
+如何用laravel
+ nginx的重新啟動服務
+ route的controller
## 先下載vs code(可從note的第6點看如何安裝以及重點)
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
'''css
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
'''
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



### class 編輯重點
<pre><code>
'''php
    <\?php
        class dog {
            // 定義 dog 的年紀「屬性」
            public $age;
            // 定義取得 dog 年紀屬性值的「方法」
            public function getAge(){
            return $this->age;
            }
        }
    \?>
'''

</code></pre>


+ 在class編輯時,如果想要用(age)就用this來指向

<pre><code>
'''php
    <\?php
        include "dog.php";
        $mydog = new dog();
        $mydog->age = 10;
        echo "我的狗年紀 : ".$mydog->getAge();
    \?>
'''
</code></pre>

+ 如果是其他php想要讀取class這個物件的話,需要include class,想要指向class的物件,就要用變數名稱指向,而不是this

# 以下為CH9
## 安裝composer
1.  + 先在pc下載php
    + 先在pc下載composer
    + 把檔案放在C:\
2. 在電腦的內容開啟"進階系統設定"
    + 打開環境變數
        + 找path
            + 複製: C:\composer;C:\php; (主要看php跟composer檔案放哪裡)
3. 確認是否設定成功
    + 打開命令提示
        + 輸入 php -version
        + 輸入 composer

## 如何用laravel
1. 先在github上新增一個專案(PHPproject)
2. 在(cmd)輸入 composer create-project --prefer-dist laravel/laravel PHPproject
    + 是為了新增一個檔案在C:\
3.  + 在(cmd)輸入git add .
    + git commit -m "commit"
    + 輸入自己在github的位置
    + git push -u origin master

## 將PHPproject弄上虛擬機
1. 打開虛擬機
2. cd /usr/share/nginx/html
3. git clone 自己的git連結

## 到CH8下載composer

## 在虛擬機安裝composer(ch9)
+ yum install php-xml rsyslog
+ systemctl start rsyslog
+ systemctl restart php-fpm
+ cd PHPproject
+ composer install

### 如果設定過nginx,就要重新啟動服務
+ nginx -t
+ nginx -s reload

## CH11
+ 新增controller的兩個檔案
    + 先在(cmd):php artisan make:controller ProductionController --resource --model=Product
+ 由 Route 轉發要求給 Controller
    <?php
    // GET product的要求轉發給ProductController的index方法處理
    Route::get('product', 'ProductionController@index');
    // GET product{id}的要求轉發給ProductController的show方法處理，同時會傳遞參數id
    Route::get('product/{id}', 'ProductionController@show');
    // POST product的要求轉發給ProductController的store方法處理
    Route::post('product', 'ProductionController@store');
    ?>
### phpmyadmin 網頁出現錯誤
+ 在linux輸入這兩行(權限的問題)
cd /var/lib  
chmod  -R  777 php 
