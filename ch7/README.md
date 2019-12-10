### 第七章 PHP 進階語法
#### 函數
+ 函數的作用 : 將功能相同的程式碼提出，以減少撰寫相同功能的程式碼
+ 使用方式
  + 語法 :
    ```php
      // 有數值需要傳遞時，需要設定參數
      // 若無傳遞數值的必要時，可不用設定參數
      function 函數名稱 (參數1,參數2,.....){
          需要執行的程式;

          //無需將執行結果傳出時，可以不用寫回傳值
          return 回傳值;
      }
    ```
  + 例 : ex7_1.php
    ```php
    <?php
      // 顯示名字
      function name(){
          echo "Peter";
      }

      // 計算成績等級
      function score($i) {
          $j = "F";
          $level = intval($i / 10);
          switch ($level){
              case 10:
              case 9:
                $j = "A";
                break;
              case 8:
                $j = "B";
                break;
              case 7:
                $j = "C";
                break;
              case 6:
                $j = "D";
                break;
              default:
                $j = "E";
          }
          return $j;
      }

      echo name();
      $backscore = score(85);
      echo "　成績等級：$backscore";
    ?>
    ```

+ 可變長度引數
  + 若傳遞進入函數的參數個數不確定，可以使用可變長度引數的參數設定
  + 使用方式
    + 語法 :
      ```php
        //重點在於那個「...」
        function 函數名稱 (...$參數名稱){
            需要執行的程式碼;
            return 回傳值;
        }
      ```
    + 例 : ex7_2.php
      ```php
      <?php
          function sum(...$numbers){
              $total = 0;
              foreach ($numbers as $i){
                  $total += $i;
              }
              return $total;
          }

          echo "總共是：".sum(1,3,5,7,9);
      ?>
      ```

+ 遞迴函數
  + 
#### 物件導向
#### 例外處理
#### 參考文獻