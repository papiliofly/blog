<?php
require_once "util.php";
require_once "app.php";

$siteTitle = "K's STUDY BLOG";
$siteDescription = "디자이너 김경빈의 기술 블로그 입니다.";
$siteKeywordsStr = "css, html, js";
$siteName = "K's STUDY BLOG";
$siteThumbUrl = "https://b.papiliofly.com/img/bn_1.jpg";

// 태그정보 시작
$tagInfos = [
    "js" => [
        "pageThumbUrl" => "https://b.papiliofly.com/img/bn_2.jpg",
        //"pageDescription" => "2021년 특별기획, 자바스크립트 관련 강좌 입니다."
    ],
];
// 태그정보 끝

// 게시물 4
$article4 = [];
$article4["id"] = 4;
$article4["title"] = "자바스크립트 태그 4";
$article4["regDate"] = "2020-01-18 17:28:15";
$article4["writerName"] = "홍길동";
$article4["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article4["tags"] = ["js", "css"];
$article4["body"] = <<<'EOT'
# 개요
- 안녕하세요.
EOT;

// 게시물 3
$article3 = [];
$article3["id"] = 3;
$article3["title"] = "자바스크립트 태그 3";
$article3["regDate"] = "2020-01-12 12:12:15";
$article3["writerName"] = "홍길동";
$article3["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article3["tags"] = ["js", "html"];
$article3["body"] = <<<'EOT'
# 개요
- php도 좋다.
EOT;

// 게시물 2
$article2 = [];
$article2["id"] = 2;
$article2["title"] = "flex 심화";
$article2["regDate"] = "2020-01-13 10:12:14";
$article2["writerName"] = "김경빈";
$article2["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article2["tags"] = ["css"];
$article2["body"] = <<<'EOT'

# Holy Grail layout 실습

```codepen
https://codepen.io/papiliofly/embed/xxEyqBJ?height=265&theme-id=light&default-tab=html,result
```
EOT;

// 게시물 1
$article1 = [];
$article1["id"] = 1;
$article1["title"] = "flex 기초";
$article1["regDate"] = "2020-01-12 17:22:01";
$article1["writerName"] = "김경빈";
$article1["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article1["tags"] = ["css"];
$article1["body"] = <<<'EOT'

# flex개요

※ 플렉서블 박스(flexible box)는 플렉스 박스(flex box)라고도 불리며, CSS3에서 처음 소개된 레이아웃 모델

※ 플렉스 박스(flex box) 속성

1. display
2. flex-direction
3. justify-content
4. align-items
5. flex-wrap
6. flex-flow
7. align-content

※ 플렉스 요소(flex item) 속성

8. order
9. align-self
10. flex


# 예시

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

EOT;

// 데이터 정리
$maxArticleId = getMaxArticleId();

$_allArticles = [];
$_tags = [];

for ( $i = $maxArticleId; $i > 0; $i-- ) {
    $varName = 'article' . $i;

    if ( isset($$varName) ) {
        $_allArticles[${$varName}['id']] = &$$varName;

        foreach ( $_allArticles[${$varName}['id']]['tags'] as $tag ) {
            $_tags[] = $tag;
        }
    }
}

$_tags = array_unique($_tags);
sort($_tags);

$_allArticlesByTag = [];

foreach ( $_tags as $tag ) {
    $_allArticlesByTag[$tag] = [];

    foreach ( $_allArticles as $article ) {
        if ( in_array($tag, $article['tags']) ) {
            $_allArticlesByTag[$tag][$article['id']] = $article;
        }
    }
}