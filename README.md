
####代码格式化

+ 代码的格式，选择Laravel风格
+ 代码提交前一定要经过格式化+优化导入

####编码设计规范

+ 短函数，单函数不超过80行，最好40以内，一个函数只做好一件事，有明确的输入输出
+ 有意义的函数命名，动宾结构，加上必要的函数注释
+ 常量，所有字母都必须大写，词间以下划线分割，比如：API_VERSION
+ 属性，小写开头的驼峰式，比如：$adminUser
+ 类函数，小写开头驼峰命名规范，比如：getUser
+ 不允许使用拼音命名，除非专有名词，比如人民币单位yuan
+ 尽可能使用已有的开源组件，不自己造轮子
+ 路由规范，保留原项目的规范，使用具体的接口语义，只使用get和post，查询接口get，写接口post
+ 异常情况需要记录错误日志，以方便排查
+ 响应格式规范化
```
{
    errno: xxx,
    errmsg: xxx,
    data: {}
}
```
####数据库规范
+ 表名，字段名全小写，下划线分割单词，见名知意
+ 表设计默认情况存在id，add_time，update_time，deleted四个字段
+ 不使用存储过程，视图，触发器，Event
> 数据库只做它最擅长的存储，计算应该交给服务层
+ 禁止使用外键，如果有外键完整性约束，需要程序自行控制
> 外键会导致表与表之间耦合，影响sql的性能
+ 禁止使用ENUM，可使用TINYINT代替
+ 数据库的相关操作一定不能用原生sql，要使用查询构造器进行语句的构建

