# sensitive-word-filtering
php实现基于确定有穷自动机算法的铭感词过滤

##  安装&使用流程
### Download and install Composer:
    curl -sS https://getcomposer.org/installer | php
> 要检查 Composer 是否正常工作，只需要通过 php 来执行 PHAR
   
    php composer.phar

### 安装扩展 

    composer require wuxiumu/sensitive-word-filtering
   
* 注意:如果你在使用composer安装时，出现                    
  Could not find package wuxiumu/sensitive-word-filtering at any version for your minimum-stability (stable). Check the package spelling or your minimum-stability 请在你的composer.json中加入<code>"minimum-stability": "dev"</code>
   
        

   
#### 如果你需要手动引入

    require './vendor/autoload.php';
    
    use DfaFilter\SensitiveHelper;

### 获取敏感词库

    // 获取感词库索引数组
    $wordData = array(
        '察象蚂',
        '拆迁灭',
        '车牌隐',
        '成人电',
        '成人卡通',
        ......
    );
   
### 检测是否含有敏感词

    $islegal = SensitiveHelper::init()->setTree($wordData)->islegal($content);
### 敏感词过滤
    
    // 敏感词替换为***为例
    $filterContent = SensitiveHelper::init()->setTree($wordData)->replace($content, '***');
    
### 获取文字中的敏感词

    // 获取内容中所有的敏感词
    $sensitiveWordGroup = SensitiveHelper::init()->setTree($wordData)->getBadWord($content);
    // 仅且获取一个敏感词
    $sensitiveWordGroup = SensitiveHelper::init()->setTree($wordData)->getBadWord($content, 1);

