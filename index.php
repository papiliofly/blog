<?php
require_once "head.php";
?>

      <section class="section-latest-articles con-min-width">
        <div class="con">
          <div class="article-list-box">
            <ul>
              <li>
                <h1>2화, Flex 심화</h1>
                <div>2020-01-12 22:32:14</div>
                <div>
                  <script type="text/x-template">
                    # Holy Grail layout
```css
 
  /*라이브러리*/
                      
 .flex {
 display:flex;
 }
                      
 .flex-d-c {
  flex-direction:column;
  }
                      
  /*커스텀*/
 .con > header, .con > footer {
  background-color:darksalmon;
  height:80px;
 }
                      
 .con > header {
   font-size:2rem;
   border-bottom:2px solid grey;
   padding-left:20px;
 }
                      
.con > footer {
  text-align:center;
  border-top:2px solid grey;
  padding:20px;
 }
                      
.con > section > nav, .con > section > aside  {
  background-color:darkseagreen;
  flex-basis:100px;
  flex-shrink:0;
  padding:20px;
  text-align:center;
 }
                      
.con > section > nav {
  border-right:2px solid grey;
 }
                     
.con > section > aside {
  border-left:2px solid grey;
 }
                     
.con > section > main {
  padding:20px;
 }
                    
```

 # 실습


```codepen
https://codepen.io/papiliofly/embed/xxEyqBJ?height=265&theme-id=light&default-tab=html,result
```

                      </script>
                  <div class="toast-ui-viewer"></div>
                </div>
              </li>

              <li>
                <h1>1화, Flex기초</h1>
                <div>2020-01-12 12:12:14</div>
                <div>
                  <script type="text/x-template">
                    # Flex개요
                    
```codepen
https://codepen.io/enxaneta/embed/adLPwv?height=265&theme-id=light&default-tab=result
```
※ 출처: https://codepen.io/enxaneta/pen/adLPwv
                    
---
                    
### 1. justify-content : 가로 선상 정렬
- flex-start : 요소들을 컨테이너 좌측 정렬
- flex-end : 요소들을 컨테이너 우측 정렬
- center : 요소들을 컨테이너 중앙 정렬
- space-between : 요소들 사이에 동일한 간격
- space-around: 요소들 주위에 동일한 간격
---
 ### 2. align-items : 세로 선상 정렬
- flex-start : 요소들을 컨테이너 상단 정렬
- flex-end : 요소들을 컨테이너 하단 정렬
- center : 요소들을 컨테이너 세로선상 중앙정렬
- base-line : 요소들을 컨테이너 시작위치 정렬
- stretch : 요소들을 컨테이너에 맞도록 늘린다.
---
 ### 3. flex-direction : 컨테이너 내의 요소들의 정렬방향
- row : 기본값, 요소들을 텍스트 방향과 동일 정렬
- row-reverse : 요소들을 텍스트 방향과 반대 정렬
- column : 요소들을 위에서 아래로 정렬
- column-reverse : 요소들을 아래에서 위로 정렬
- flex방향이 column일 경우, justify-content는 세로 align-items는 가로가 된다.
---
### 4. order
- 각 아이템들의 위치를 컨테이너 내에서 음수, 양수의 값으로 세부 조정 가능.
---
### 5. align-self
 - 개별요소에 적용 할 수 있는 또다른 속성. align-items가 사용하는 값을 인자로 받고 그 값은 지정 요소에만 적용 된다.
---
 ### 6. flex-wrap : 한줄 또는 여러 줄 정렬
- nowrap : 모든 요소 한 줄 정렬
- wrap :  모든 요소 여러 줄에 걸쳐 정렬
- wrap-reverse :  모든 요소 여러 줄에 걸쳐 반대 방향 정렬
---
### 7. flex-flow : flex-direction+flex-wrap
- ex) { flex-flow: nowrap row; }
---
### 8. align-content : 여러 줄 사이의 간격
- flex-start : 여러줄을 상단 정렬
- flex-end : 여러줄을 하단 정렬
- center : 여러줄을 세로선상 가운데 정렬
- space-between : 여러 줄들 사이에 동일한 간격
- space-around: 여러 줄들 주위에 동일한 간격
- stretch : 여러줄을 컨테이너에 맞도록 늘린다.
---
### 9. flex-grow
- flex-grow 속성은 flex item의 확장에 관련된 속성이다. 0과 양의 정수를 속성값에 사용한다.
---
 ### 10. flex-shrink
- flex-shrink 속성은 flex item의 축소에 관련된 속성이다. 0과 양의 정수를 속성값에 사용한다. 기본값은 1이다.

                      </script>
                  <div class="toast-ui-viewer"></div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </section>


<?php
require_once "foot.php";
?>