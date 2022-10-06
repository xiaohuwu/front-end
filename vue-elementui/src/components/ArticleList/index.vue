<template>
  <el-row>
    <el-col :span="24" v-for="(o) in 2" :key="o" class="marginBottom10">
      <el-card class="item">
        <p class="title">函数表达式 与 函数声明 别搞混了</p>
        <p class="desc">
          在JavaScript中，function关键字做一个简单的工作:创建一个函数。但是，使用关键字定义函数的方式可以创建具有不同属性的函数。在这篇文章中，你将了解如何使用function关键字来编写函数声明和函数表达式，以及这两种类型的函数之间有什么区别。1.
          函数表达式 VS
          函数声明函数声明和函数表达式是使用在JavaScript中，function关键字做一个简单的工作:创建一个函数。但是，使用关键字定义函数的方式可以创建具有不同属性的函数。在这篇文章中，你将了解如何使用function关键字来编写函数声明和函数表达式，以及这两种类型的函数之间有什么区别。1.
          函数表达式 VS 函数声明函数声明和函数表达式是使用
        </p>
        <p class="footer">
          2021-11-12 09:30
          <span class="viewer"> <i class="el-icon-view"></i>130 </span>
        </p>
      </el-card>
    </el-col>
  </el-row>
</template>

<script>
export default {
  name: "ArticleList",
  props: {},
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.item {
  text-align: left;
}
.title {
  font-weight: bold;
}
.desc {
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 2;
  overflow: hidden;
  color: #aaa;
}
.footer {
  font-size: 12px;
}
.viewer {
  margin-left: 15px;
}
.marginBottom10 {
  margin-bottom: 10px;
}
</style>
